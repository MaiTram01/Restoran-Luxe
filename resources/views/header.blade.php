<header>
    <div class="container header my-3 d-none d-lg-flex">
        <div class="logo">
            <a href="{{ route('home') }}">
                <i class="fa fa-utensils me-3"></i>
                <h1 class="mb-0">Restoran</h1>
            </a>
        </div>

        <div class="menus">
            <ul class="d-flex mb-0">
                <li class="list-unstyled py-2">
                    <a class="text-decoration-none text-uppercase p-2" href="/home">Home</a>
                </li>
                <li class="list-unstyled py-2">
                    <a class="text-decoration-none text-uppercase p-2" href="/about">About</a>
                </li>
                <li class="list-unstyled py-2">
                    <a class="text-decoration-none text-uppercase p-2" href="/reservation">Reservation</a>
                </li>
                <li class="list-unstyled py-2">
                    <a class="text-decoration-none text-uppercase p-2" href="/menu">Menu</a>
                </li>
                <li class="list-unstyled py-2">
                    <a class="text-decoration-none text-uppercase p-2" href="/contact">Contact</a>
                </li>
            </ul>
        </div>

        <div class="icons" style="display: flex; align-items: center; gap: 8px;">
            <div class="search" id="searchBtn">
                <input type="text" placeholder="Enter foods..." />
                <i class="fa fa-search"></i>
                
            </div>
  
            <a class="text-decoration-none" id="shoppingbutton" href="#">
                <i class="fa fa-shopping-bag me"></i>
            </a>

            <a class="sign-in" href="/signup">Sign up /</a>
            <a class="sign-in" href="/login" >Sign in</a>
           
            <!-- <a class="text-decoration-none" href="/signup" style="color: white; font-size: 20px; font-weight: bold;" >Sign up /</a>
            <a class="text-decoration-none" href="/login" style="color: white; font-size: 20px; font-weight: bold;">Sign in</a> -->
        </div>
    </div>
    

    <div class="d-flex justify-content-around py-3 align-items-center d-lg-none">
        <div id="hamburger">
            <i class="fa fa-2x fa-bars me-3 text-white"></i>
        </div>

        <div class="mobile-nav-logo">
            <div class="logo">
                <a href="/home">
                    <i class="fa fa-utensils me-3"></i>
                    <h1 class="mb-0">Restoran</h1>
                </a>
            </div>
        </div>

        <div class="mobile-nav-icons">
            <div class="icons" style="display: flex; align-items: center; gap: 8px;">
                <div class="search" id="searchBtnMobile">
                    <input type="search" placeholder="Enter foods..." />
                    <i class="fa fa-search"></i>
                </div>
                
                <a class="text-decoration-none" id="shoppingbuttonMobile" href="#">
                    <i class="fa fa-shopping-bag"></i>
                </a>
            
                <a class="sign-in" href="/signup">Sign up /</a>
                <a class="sign-in" href="/login" >Sign in</a>
            </div>
        </div>

        <div class="position-fixed w-75 bg-white h-100 top-0 start-0" id="mobile-menu">
            <div id="hamburger-cross" class="d-flex justify-content-end align-items-center py-2">
                <i class="fa fa-2x fa-plus me-3 "></i>
            </div>
            <div class="menus">
                <ul class="d-flex flex-column ps-2 mb-0 mt-4">
                    <li class="list-unstyled py-2">
                        <a class="text-dark text-decoration-none text-uppercase p-2" href="/home">Home</a>
                    </li>
                    <li class="list-unstyled py-2">
                        <a class="text-dark text-decoration-none text-uppercase p-2" href="/about">About</a>
                    </li>
                    <li class="list-unstyled py-2">
                        <a class="text-dark text-decoration-none text-uppercase p-2" href="/reservation">Reservation</a>
                    </li>
                    <li class="list-unstyled py-2">
                        <a class="text-dark text-decoration-none text-uppercase p-2" href="/menu">Menu</a>
                    </li>
                    <li class="list-unstyled py-2">
                        <a class="text-dark text-decoration-none text-uppercase p-2" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>