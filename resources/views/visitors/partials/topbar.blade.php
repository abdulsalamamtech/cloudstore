    <!-- Topbar Start -->
    <div class="container-fluid">
        <div class="py-1 row bg-secondary px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center h-100">
                    <a class="mr-3 text-body" href="/about">About</a>
                    <a class="mr-3 text-body" href="/contact">Contact</a>
                    <a class="mr-3 text-body" href="/help">Help</a>
                    <a class="mr-3 text-body" href="/fags">FAQs</a>
                </div>
            </div>
            <div class="text-center col-lg-6 text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <div class="btn-group">
                        @guest
                            <div class="d-inline-flex align-items-center">
                                <a href="{{ route('register') }}" class="mx-1 btn btn-sm btn-light">Register</a>
                                <a href="{{ route('login') }}" class="mx-1 btn btn-sm btn-light">Login</a>
                            </div>
                        @endguest
                        @auth
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">My Account</button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <div class="dropdown-item" type="button">{{ Auth::user()->name }}</div>
                                <span class="ml-4 mr-3 text-center">{{ Auth::user()->email }}</span>
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <input class="dropdown-item" type="submit" value="LogOut">
                                </form>
                            </div>
                        @endauth
                    </div>
                    <div class="mx-2 btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">NGN</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">EUR</button>
                            <button class="dropdown-item" type="button">GBP</button>
                            <button class="dropdown-item" type="button">CAD</button>
                            <button class="dropdown-item" type="button">USD</button>
                        </div>
                    </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">EN</button>
                        <div class="dropdown-menu dropdown-menu-right">
                            <button class="dropdown-item" type="button">FR</button>
                            <button class="dropdown-item" type="button">AR</button>
                            <button class="dropdown-item" type="button">RU</button>
                        </div>
                    </div>
                </div>
                <div class="d-inline-flex align-items-center d-block d-lg-none">
                    <a href="" class="px-0 ml-2 btn">
                        <i class="fas fa-heart text-dark"></i>
                        <span class="border badge text-dark border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                    <a href="" class="px-0 ml-2 btn">
                        <i class="fas fa-shopping-cart text-dark"></i>
                        <span class="border badge text-dark border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                    </a>
                </div>
            </div>
        </div>
        <div class="py-3 row align-items-center bg-light px-xl-5 d-none d-lg-flex">
            <div class="col-lg-4">
                <a href="" class="text-decoration-none">
                    <span class="px-2 h1 text-uppercase text-primary bg-dark">Multi</span>
                    <span class="px-2 h1 text-uppercase text-dark bg-primary ml-n1">Shop</span>
                </a>
            </div>
            <div class="text-left col-lg-4 col-6">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="bg-transparent input-group-text text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="text-right col-lg-4 col-6">
                <p class="m-0">Customer Service</p>
                <h5 class="m-0">+234 90 9192 2467</h5>
            </div>
        </div>
    </div>
    <!-- Topbar End -->
