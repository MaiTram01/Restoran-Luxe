<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"
></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="source/assets/js/script.js"></script>
<script>
    const homeUrl = "{{ route('home') }}";
</script>
<script>
    $(document).ready(function () {
        loadCart();
        let categoryName= "";
        $(".category-link").on("click", function (e) {
            e.preventDefault();
            categoryName = $(this).data("name");
            let categoryId = $(this).data("category");
            let categoryImage = $(this).find("[data-image]").data("image");
           
            let menuHtml = `
                    <div class="row my-5 py-3">
                        <div class="col-lg-5">
                            <div class="pb-5 pb-lg-0">
                                <img width="100%" src="source/assets/images/${categoryImage}" alt="">
                            </div>
                        </div>
                        <div class="col-lg-7">
                `;
            $.get(`/products/${categoryId}`)
                .done(response => {
                    const limitedProducts = response.slice(0, 5); 

                    menuHtml += limitedProducts.map(item => `
                        <div class="item-wrapper d-flex justify-content-between">
                            <div class="item-left">
                                <h5>${item.item_name}</h5>
                                <p>${item.description}</p>
                            </div>
                            <div class="item-right">
                                <span class="item-price">
                                    <span class="price-symbol">$</span> ${Number(item.price).toLocaleString('vi-VN', { minimumFractionDigits: 0, maximumFractionDigits: 0 })}
                                </span>
                                <div class="item-btn">
                                    <a class="add-to-cart" data-id="${item.id}" data-price="${item.price}">
                                        Add To Cart
                                    </a>
                                </div>
                            </div>
                        </div>
                    
                    `).join('');

                    if ($("#our-menus").length) {
                        $("#our-menus").html(menuHtml);
                    }
                })
                .fail(() => alert("Không thể tải dữ liệu. Vui lòng thử lại!"));
        });

        $(document).on("click", ".add-to-cart", function (e) {
            e.preventDefault();
            let productId = $(this).data("id");
            let price = $(this).data("price");
            let currentCategory = categoryName;
            console.log(currentCategory);
            $.ajax({
                url: "/cart/add",
                type: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    id: productId,
                    quantity: 1,
                    price: price,  
                    categoryName: currentCategory,
                },
                success: function (response) {
                    alert(response.success);
                    
                    loadCart();
                    if ($(".shopping-cart-body").length) {
                        let cartItems = Object.values(response.cart);
                        let cartHtml = '';
                        let subtotal = 0;
                    
                        cartItems.forEach(item => {
                            subtotal += parseFloat(item.price) * item.quantity;
        
                            cartHtml += `
                                <div class="row shopping-cart-item d-flex justify-content-between align-items-center py-2" data-id="${item.id}">
                                    <div class="col-2 d-flex align-items-center">
                                        <img src="source/assets/images/items/${item.categoryName}/${item.avatar}" width="60">
                                    </div>
                                    <div class="col-5">
                                        <h5 class="mb-1">${item.name}</h5>
                                        <div class="shopping-cart-counter d-flex align-items-center">
                                            <i class="fa fa-minus px-2 cursor-pointer change-qty" data-id="${item.id}" data-action="decrease"></i>
                                            <span class="px-2 quantity-${item.id}">${item.quantity}</span>
                                            <i class="fa fa-plus px-2 cursor-pointer change-qty" data-id="${item.id}" data-action="increase"></i>
                                        </div>
                                    </div>
                                    <div class="col-2 item-price text-end">
                                        <p class="mb-0">$${Number(item.price * item.quantity).toLocaleString('vi-VN', { minimumFractionDigits: 0, maximumFractionDigits: 0 })}</p>
                                    </div>
                                    <div class="col-2 text-end">
                                        <i class="bi bi-trash text-danger remove-item" data-id="${item.id}"></i>
                                    </div>
                                </div>
                            `;
                        });
                        cartHtml += `
                            <div class="shopping-cart-footer">
                                <div class="d-flex justify-content-between px-3 py-2">
                                    <div>
                                        <h2 class="mb-0">Subtotal</h2>
                                        <p class="mb-0">Shipping & taxes calculated at checkout</p>
                                    </div>
                                    <div class="d-flex align-items-end">
                                        <p class="footer-total-price mb-0">$${Number(subtotal).toLocaleString('vi-VN', { minimumFractionDigits: 0, maximumFractionDigits: 0 })}</p>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between px-2">
                                    <div class="footer-checkout">
                                        <div class="anim-layer"></div>
                                        <a href="/bookingtable">Reservation</a>
                                    </div>
                                    <div class="footer-shopping">
                                        <div class="anim-layer"></div>
                                        <a href="/menu">Continue Shopping</a>
                                    </div>
                                </div>
                            </div>
                        `;
                        $(".shopping-cart-body").html(cartHtml);
                    }
                },
                error: function (xhr) {
                    console.log(xhr);
                    alert("Có lỗi xảy ra. Vui lòng thử lại sau!");
                }
            });
            });
        $(document).on("click", ".remove-item", function (e) {
                e.preventDefault();
                let itemId = $(this).data("id");

                
                if (confirm("Bạn có chắc chắn muốn xóa sản phẩm này?")) {         
                    $.ajax({
                        url: '/cart/remove/' + itemId ,  
                        method: 'POST',
                        data: {
                        
                            _token: '{{ csrf_token() }}' 
                        },
                        success: function(response) {
                            if (response.success) {
                                $(".remove-item[data-id='" + itemId + "']").closest('.col-2').parent().remove();
                                loadCart();
                            } else {
                                alert("Có lỗi xảy ra, vui lòng thử lại.");
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error("Xóa sản phẩm không thành công:", error);
                            alert("Đã xảy ra lỗi trong quá trình xóa sản phẩm.");
                        }
                    });
                }
            });
    });
    $(document).on("click", ".change-qty", function () {
        const productId = $(this).data("id");
        const action = $(this).data("action");

        const quantityElement = $(`.quantity-${productId}`);
        let currentQty = parseInt(quantityElement.text());

        if (action === "increase") {
            currentQty += 1;
        } else if (action === "decrease" && currentQty > 1) {
            currentQty -= 1;
        }

        $.ajax({
            url: "/cart/update", 
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                id: productId,
                quantity: currentQty
            },
            success: function (response) {
                quantityElement.text(currentQty);

                if (response.totalPrice) {
                    $(".footer-total-price").text(`$ ${parseFloat(response.totalPrice).toFixed(2)}`);
                };
            },
            error: function () {
                alert("Lỗi khi cập nhật số lượng. Vui lòng thử lại.");
            }
        });
    });


    function loadCart() {
    $.ajax({
        url: "/cart/load",
        type: "GET",
        success: function (response) {
            if ($(".shopping-cart-body").length) {
                let cartItems = Object.values(response.cart);
                let cartHtml = '';
                let subtotal = 0;
                cartItems.forEach(item => {
                    subtotal += parseFloat(item.price) * item.quantity;
                    cartHtml += `
                        <div class="row shopping-cart-item d-flex justify-content-between align-items-center py-2" data-id="${item.id}">
                            <div class="col-2 d-flex align-items-center">
                                <img src="source/assets/images/items/${item.categoryName}/${item.avatar}" width="60">
                            </div>
                            <div class="col-5">
                                <h5 class="mb-1">${item.name}</h5>
                                <div class="shopping-cart-counter d-flex align-items-center">
                                    <i class="fa fa-minus px-2 cursor-pointer change-qty" data-id="${item.id}" data-action="decrease"></i>
                                    <span class="px-2 quantity-${item.id}">${item.quantity}</span>
                                    <i class="fa fa-plus px-2 cursor-pointer change-qty" data-id="${item.id}" data-action="increase"></i>
                                </div>
                            </div>
                            <div class="col-2 item-price text-end">
                                <p class="mb-0">$${Number(item.price).toLocaleString('vi-VN')}</p>
                            </div>
                            <div class="col-2 text-end">
                                <i class="fa fa-trash text-danger remove-item" data-id="${item.id}"></i>
                            </div>
                        </div>
                    `;
                });
                cartHtml += `
                    <div class="shopping-cart-footer">
                        <div class="d-flex justify-content-between px-3 py-2">
                            <div>
                                <h2 class="mb-0">Subtotal</h2>
                                <p class="mb-0">Shipping & taxes calculated at checkout</p>
                            </div>
                            <div class="d-flex align-items-end">
                                <p class="footer-total-price mb-0">$ ${subtotal.toFixed(2)}</p>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between px-2">
                            <div class="footer-checkout">
                                <div class="anim-layer"></div>
                                <a href="/bookingtable">Reservation</a>
                            </div>
                            <div class="footer-shopping">
                                <div class="anim-layer"></div>
                                <a href="/menu">Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                `;
                $(".shopping-cart-body").html(cartHtml);
            }
        },
        error: function (xhr) {
            console.error("Lỗi khi load giỏ hàng:", xhr);
        }
    });
}

</script>
