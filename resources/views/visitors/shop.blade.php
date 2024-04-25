    <!-- Head Start -->
    <!-- Head End -->

    <!-- Topbar Start -->
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <!-- Navbar Start -->

    @extends('visitors.layouts.app')

    @section('content')


        <!-- Breadcrumb Start -->
        <div class="container-fluid">
            <div class="row px-xl-5">
                <div class="col-12">
                    <nav class="breadcrumb bg-light mb-30">
                        <a class="breadcrumb-item text-dark" href="{{ route('home') }}">Home</a>
                        <a class="breadcrumb-item text-dark" href="{{ route('shop') }}">Shop</a>
                        <span class="breadcrumb-item active">Shop List</span>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->


        <!-- Shop Start -->
        <div class="container-fluid">
            <div class="row px-xl-5">
                <!-- Shop Sidebar Start -->
                <div class="col-lg-3 col-md-4">
                    <!-- Price Start -->
                    <h5 class="mb-3 section-title position-relative text-uppercase"><span class="pr-3 bg-secondary">Filter by price</span></h5>
                    <div class="p-4 bg-light mb-30">
                        <form>
                            <div class="mb-3 custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                <input type="checkbox" class="custom-control-input" checked id="price-all">
                                <label class="custom-control-label" for="price-all">All Price</label>
                                <span class="border badge font-weight-normal">1000</span>
                            </div>
                            <div class="mb-3 custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                <input type="checkbox" class="custom-control-input" id="price-1">
                                <label class="custom-control-label" for="price-1">$0 - $100</label>
                                <span class="border badge font-weight-normal">150</span>
                            </div>
                            <div class="mb-3 custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                <input type="checkbox" class="custom-control-input" id="price-2">
                                <label class="custom-control-label" for="price-2">$100 - $200</label>
                                <span class="border badge font-weight-normal">295</span>
                            </div>
                            <div class="mb-3 custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                <input type="checkbox" class="custom-control-input" id="price-3">
                                <label class="custom-control-label" for="price-3">$200 - $300</label>
                                <span class="border badge font-weight-normal">246</span>
                            </div>
                            <div class="mb-3 custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                <input type="checkbox" class="custom-control-input" id="price-4">
                                <label class="custom-control-label" for="price-4">$300 - $400</label>
                                <span class="border badge font-weight-normal">145</span>
                            </div>
                            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                <input type="checkbox" class="custom-control-input" id="price-5">
                                <label class="custom-control-label" for="price-5">$400 - $500</label>
                                <span class="border badge font-weight-normal">168</span>
                            </div>
                        </form>
                    </div>
                    <!-- Price End -->

                    <!-- Color Start -->
                    <h5 class="mb-3 section-title position-relative text-uppercase"><span class="pr-3 bg-secondary">Filter by color</span></h5>
                    <div class="p-4 bg-light mb-30">
                        <form>
                            <div class="mb-3 custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                <input type="checkbox" class="custom-control-input" checked id="color-all">
                                <label class="custom-control-label" for="price-all">All Color</label>
                                <span class="border badge font-weight-normal">1000</span>
                            </div>
                            <div class="mb-3 custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                <input type="checkbox" class="custom-control-input" id="color-1">
                                <label class="custom-control-label" for="color-1">Black</label>
                                <span class="border badge font-weight-normal">150</span>
                            </div>
                            <div class="mb-3 custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                <input type="checkbox" class="custom-control-input" id="color-2">
                                <label class="custom-control-label" for="color-2">White</label>
                                <span class="border badge font-weight-normal">295</span>
                            </div>
                            <div class="mb-3 custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                <input type="checkbox" class="custom-control-input" id="color-3">
                                <label class="custom-control-label" for="color-3">Red</label>
                                <span class="border badge font-weight-normal">246</span>
                            </div>
                            <div class="mb-3 custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                <input type="checkbox" class="custom-control-input" id="color-4">
                                <label class="custom-control-label" for="color-4">Blue</label>
                                <span class="border badge font-weight-normal">145</span>
                            </div>
                            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                <input type="checkbox" class="custom-control-input" id="color-5">
                                <label class="custom-control-label" for="color-5">Green</label>
                                <span class="border badge font-weight-normal">168</span>
                            </div>
                        </form>
                    </div>
                    <!-- Color End -->

                    <!-- Size Start -->
                    <h5 class="mb-3 section-title position-relative text-uppercase"><span class="pr-3 bg-secondary">Filter by size</span></h5>
                    <div class="p-4 bg-light mb-30">
                        <form>
                            <div class="mb-3 custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                <input type="checkbox" class="custom-control-input" checked id="size-all">
                                <label class="custom-control-label" for="size-all">All Size</label>
                                <span class="border badge font-weight-normal">1000</span>
                            </div>
                            <div class="mb-3 custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                <input type="checkbox" class="custom-control-input" id="size-1">
                                <label class="custom-control-label" for="size-1">XS</label>
                                <span class="border badge font-weight-normal">150</span>
                            </div>
                            <div class="mb-3 custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                <input type="checkbox" class="custom-control-input" id="size-2">
                                <label class="custom-control-label" for="size-2">S</label>
                                <span class="border badge font-weight-normal">295</span>
                            </div>
                            <div class="mb-3 custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                <input type="checkbox" class="custom-control-input" id="size-3">
                                <label class="custom-control-label" for="size-3">M</label>
                                <span class="border badge font-weight-normal">246</span>
                            </div>
                            <div class="mb-3 custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                <input type="checkbox" class="custom-control-input" id="size-4">
                                <label class="custom-control-label" for="size-4">L</label>
                                <span class="border badge font-weight-normal">145</span>
                            </div>
                            <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                                <input type="checkbox" class="custom-control-input" id="size-5">
                                <label class="custom-control-label" for="size-5">XL</label>
                                <span class="border badge font-weight-normal">168</span>
                            </div>
                        </form>
                    </div>
                    <!-- Size End -->
                </div>
                <!-- Shop Sidebar End -->


                <!-- Shop Product Start -->
                <div class="col-lg-9 col-md-8">
                    <div class="pb-3 row">
                        <div class="pb-1 col-12">
                            <div class="mb-4 d-flex align-items-center justify-content-between">
                                <div>
                                    <button class="btn btn-sm btn-light"><i class="fa fa-th-large"></i></button>
                                    <button class="ml-2 btn btn-sm btn-light"><i class="fa fa-bars"></i></button>
                                </div>
                                <div class="ml-2">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Sorting</button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Latest</a>
                                            <a class="dropdown-item" href="#">Popularity</a>
                                            <a class="dropdown-item" href="#">Best Rating</a>
                                        </div>
                                    </div>
                                    <div class="ml-2 btn-group">
                                        <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-toggle="dropdown">Showing</button>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">10</a>
                                            <a class="dropdown-item" href="#">20</a>
                                            <a class="dropdown-item" href="#">30</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-1 col-lg-4 col-md-6 col-sm-6">
                            <div class="mb-4 product-item bg-light">
                                <div class="overflow-hidden product-img position-relative">
                                    <img class="img-fluid w-100" src="assets/img/product-1.jpg" alt="">
                                    <div class="product-action">
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="py-4 text-center">
                                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                                    <div class="mt-2 d-flex align-items-center justify-content-center">
                                        <h5>$123.00</h5><h6 class="ml-2 text-muted"><del>$123.00</del></h6>
                                    </div>
                                    <div class="mb-1 d-flex align-items-center justify-content-center">
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small>(99)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-1 col-lg-4 col-md-6 col-sm-6">
                            <div class="mb-4 product-item bg-light">
                                <div class="overflow-hidden product-img position-relative">
                                    <img class="img-fluid w-100" src="assets/img/product-2.jpg" alt="">
                                    <div class="product-action">
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="py-4 text-center">
                                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                                    <div class="mt-2 d-flex align-items-center justify-content-center">
                                        <h5>$123.00</h5><h6 class="ml-2 text-muted"><del>$123.00</del></h6>
                                    </div>
                                    <div class="mb-1 d-flex align-items-center justify-content-center">
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star-half-alt text-primary"></small>
                                        <small>(99)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-1 col-lg-4 col-md-6 col-sm-6">
                            <div class="mb-4 product-item bg-light">
                                <div class="overflow-hidden product-img position-relative">
                                    <img class="img-fluid w-100" src="assets/img/product-3.jpg" alt="">
                                    <div class="product-action">
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="py-4 text-center">
                                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                                    <div class="mt-2 d-flex align-items-center justify-content-center">
                                        <h5>$123.00</h5><h6 class="ml-2 text-muted"><del>$123.00</del></h6>
                                    </div>
                                    <div class="mb-1 d-flex align-items-center justify-content-center">
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star-half-alt text-primary"></small>
                                        <small class="mr-1 far fa-star text-primary"></small>
                                        <small>(99)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-1 col-lg-4 col-md-6 col-sm-6">
                            <div class="mb-4 product-item bg-light">
                                <div class="overflow-hidden product-img position-relative">
                                    <img class="img-fluid w-100" src="assets/img/product-4.jpg" alt="">
                                    <div class="product-action">
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="py-4 text-center">
                                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                                    <div class="mt-2 d-flex align-items-center justify-content-center">
                                        <h5>$123.00</h5><h6 class="ml-2 text-muted"><del>$123.00</del></h6>
                                    </div>
                                    <div class="mb-1 d-flex align-items-center justify-content-center">
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 far fa-star text-primary"></small>
                                        <small class="mr-1 far fa-star text-primary"></small>
                                        <small>(99)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-1 col-lg-4 col-md-6 col-sm-6">
                            <div class="mb-4 product-item bg-light">
                                <div class="overflow-hidden product-img position-relative">
                                    <img class="img-fluid w-100" src="assets/img/product-5.jpg" alt="">
                                    <div class="product-action">
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="py-4 text-center">
                                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                                    <div class="mt-2 d-flex align-items-center justify-content-center">
                                        <h5>$123.00</h5><h6 class="ml-2 text-muted"><del>$123.00</del></h6>
                                    </div>
                                    <div class="mb-1 d-flex align-items-center justify-content-center">
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small>(99)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-1 col-lg-4 col-md-6 col-sm-6">
                            <div class="mb-4 product-item bg-light">
                                <div class="overflow-hidden product-img position-relative">
                                    <img class="img-fluid w-100" src="assets/img/product-6.jpg" alt="">
                                    <div class="product-action">
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="py-4 text-center">
                                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                                    <div class="mt-2 d-flex align-items-center justify-content-center">
                                        <h5>$123.00</h5><h6 class="ml-2 text-muted"><del>$123.00</del></h6>
                                    </div>
                                    <div class="mb-1 d-flex align-items-center justify-content-center">
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star-half-alt text-primary"></small>
                                        <small>(99)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-1 col-lg-4 col-md-6 col-sm-6">
                            <div class="mb-4 product-item bg-light">
                                <div class="overflow-hidden product-img position-relative">
                                    <img class="img-fluid w-100" src="assets/img/product-7.jpg" alt="">
                                    <div class="product-action">
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="py-4 text-center">
                                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                                    <div class="mt-2 d-flex align-items-center justify-content-center">
                                        <h5>$123.00</h5><h6 class="ml-2 text-muted"><del>$123.00</del></h6>
                                    </div>
                                    <div class="mb-1 d-flex align-items-center justify-content-center">
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star-half-alt text-primary"></small>
                                        <small class="mr-1 far fa-star text-primary"></small>
                                        <small>(99)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-1 col-lg-4 col-md-6 col-sm-6">
                            <div class="mb-4 product-item bg-light">
                                <div class="overflow-hidden product-img position-relative">
                                    <img class="img-fluid w-100" src="assets/img/product-8.jpg" alt="">
                                    <div class="product-action">
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="py-4 text-center">
                                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                                    <div class="mt-2 d-flex align-items-center justify-content-center">
                                        <h5>$123.00</h5><h6 class="ml-2 text-muted"><del>$123.00</del></h6>
                                    </div>
                                    <div class="mb-1 d-flex align-items-center justify-content-center">
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 far fa-star text-primary"></small>
                                        <small class="mr-1 far fa-star text-primary"></small>
                                        <small>(99)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="pb-1 col-lg-4 col-md-6 col-sm-6">
                            <div class="mb-4 product-item bg-light">
                                <div class="overflow-hidden product-img position-relative">
                                    <img class="img-fluid w-100" src="assets/img/product-9.jpg" alt="">
                                    <div class="product-action">
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-shopping-cart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="far fa-heart"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-sync-alt"></i></a>
                                        <a class="btn btn-outline-dark btn-square" href=""><i class="fa fa-search"></i></a>
                                    </div>
                                </div>
                                <div class="py-4 text-center">
                                    <a class="h6 text-decoration-none text-truncate" href="">Product Name Goes Here</a>
                                    <div class="mt-2 d-flex align-items-center justify-content-center">
                                        <h5>$123.00</h5><h6 class="ml-2 text-muted"><del>$123.00</del></h6>
                                    </div>
                                    <div class="mb-1 d-flex align-items-center justify-content-center">
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 fa fa-star text-primary"></small>
                                        <small class="mr-1 far fa-star text-primary"></small>
                                        <small class="mr-1 far fa-star text-primary"></small>
                                        <small>(99)</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <nav>
                            <ul class="pagination justify-content-center">
                                <li class="page-item disabled"><a class="page-link" href="#">Previous</span></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                            </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <!-- Shop Product End -->
            </div>
        </div>
        <!-- Shop End -->


    @endsection


    <!-- Footer Start -->
    <!-- Footer End -->
