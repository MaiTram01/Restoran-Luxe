@extends('master')
@section('content')
<section class="page-banner d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="banner-content">
                <h2 class="text-white display-3 text-center" data-aos="fade-right" data-aos-delay="3000">Product detail</h2>
                <div class="divider" data-aos="fade-up-right" data-aos-delay="3000">
                    <div class="dot mb-2"></div>
                </div>
                <p class="text-white mb-0 text-center" data-aos="fade-left" data-aos-delay="3000">
                    Just a few clicks to complete your reservation and save time!
                </p>
            </div>
        </div>
    </div>
</section>
<div class="container mt-5">
    @if($product)
    <div class="product-detail">
        <div class="col-md-6">
            <img src="{{ asset('source/assets/images/items/' . ($product->category->category_name) . '/' . $product->avatar) }}"
                class="product-image" 
                alt="{{ $product->item_name }}"/>
        </div>
        <div class="col-md-6">
            <h2>{{ $product->item_name }}</h2>
            <p>{{ $product->description }}</p>
            <h4 class="text-danger" id="item-price">${{ number_format($product->price, 0, ',', '.') }}</h4>
            <div class="d-flex align-items-center">
                <button class="btn btn-outline-secondary btn-decrease">-</button>
                <span class="quantity mx-2">1</span>
                <button class="btn btn-outline-secondary btn-increase">+</button>
            </div>
            <button class="btn btn-warning mt-3">Add to Cart</button>
            <p class="mt-2"><strong>Category:</strong> {{ $product->category->category_name }}</p>
        </div>
    </div>
    <div class="mt-4">
        <button class="btn btn-warning">Description</button>
        <p class="mt-3">
            {{ $product->description_detail }}
        </p>
    </div>

    <!-- Comment Section -->
    <div class="mt-5">    
        <h4>Customer Reviews</h4>
        <div class="mb-3">
            <textarea class="form-control" rows="3" placeholder="Write your review..."></textarea>
            <button class="btn btn-primary mt-2">Submit</button>
        </div>
    </div>

    <!-- Related Products Section -->
    <div class="mt-5">
        <h4>Related Products</h4>
        <div class="row">
            @foreach($relatedProducts as $relatedProduct)
            <div class="col-md-3">
                <div class="card">
                    <img src="{{ asset('source/assets/images/items/' . ($relatedProduct->category->category_name) . '/' . $relatedProduct->avatar) }}"
                        class="product-image" 
                        alt="{{ $relatedProduct->item_name }}"/>
                    <div class="card-body">
                        <h5 class="card-title">{{ $relatedProduct->item_name }}</h5>
                        <p class="text-danger">${{ number_format($relatedProduct->price, 0, ',', '.') }}</p>
                        <a href="{{ route('productdetail', ['productId' => $relatedProduct->id]) }}" class="btn btn-warning">View</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
    <p>Product not found.</p>
    @endif
</div>
@endsection
