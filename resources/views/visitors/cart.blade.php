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
                <div class="col-12 text-none">
                    <nav class="breadcrumb bg-light mb-30">
                        <span class="breadcrumb-item text-dark" href="{{ route('home') }}">Home</span>
                        <span class="breadcrumb-item text-dark" href="{{ route('shop') }}">Shop</span>
                        <span class="breadcrumb-item active">Shopping Cart</span>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->


        <!-- Cart Start -->
        <div class="container-fluid">
            <div class="row px-xl-5">
                <div class="mb-5 col-lg-8 table-responsive">
                    <table class="table mb-0 text-center table-light table-borderless table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th>Products</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>Remove</th>
                            </tr>
                        </thead>
                        <tbody class="align-middle">
                            <tr>
                                <td class="align-middle"><img src="assets/img/product-1.jpg" alt="" style="width: 50px;"> Product Name</td>
                                <td class="align-middle">$150</td>
                                <td class="align-middle">
                                    <div class="mx-auto input-group quantity" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-primary btn-minus" >
                                            <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="text-center border-0 form-control form-control-sm bg-secondary" value="1">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-primary btn-plus">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">$150</td>
                                <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                            </tr>
                            <tr>
                                <td class="align-middle"><img src="assets/img/product-2.jpg" alt="" style="width: 50px;"> Product Name</td>
                                <td class="align-middle">$150</td>
                                <td class="align-middle">
                                    <div class="mx-auto input-group quantity" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-primary btn-minus" >
                                            <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="text-center border-0 form-control form-control-sm bg-secondary" value="1">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-primary btn-plus">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">$150</td>
                                <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                            </tr>
                            <tr>
                                <td class="align-middle"><img src="assets/img/product-3.jpg" alt="" style="width: 50px;"> Product Name</td>
                                <td class="align-middle">$150</td>
                                <td class="align-middle">
                                    <div class="mx-auto input-group quantity" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-primary btn-minus" >
                                            <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="text-center border-0 form-control form-control-sm bg-secondary" value="1">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-primary btn-plus">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">$150</td>
                                <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                            </tr>
                            <tr>
                                <td class="align-middle"><img src="assets/img/product-4.jpg" alt="" style="width: 50px;"> Product Name</td>
                                <td class="align-middle">$150</td>
                                <td class="align-middle">
                                    <div class="mx-auto input-group quantity" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-primary btn-minus" >
                                            <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="text-center border-0 form-control form-control-sm bg-secondary" value="1">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-primary btn-plus">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">$150</td>
                                <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                            </tr>
                            <tr>
                                <td class="align-middle"><img src="assets/img/product-5.jpg" alt="" style="width: 50px;"> Product Name</td>
                                <td class="align-middle">$150</td>
                                <td class="align-middle">
                                    <div class="mx-auto input-group quantity" style="width: 100px;">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-primary btn-minus" >
                                            <i class="fa fa-minus"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="text-center border-0 form-control form-control-sm bg-secondary" value="1">
                                        <div class="input-group-btn">
                                            <button class="btn btn-sm btn-primary btn-plus">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div>
                                    </div>
                                </td>
                                <td class="align-middle">$150</td>
                                <td class="align-middle"><button class="btn btn-sm btn-danger"><i class="fa fa-times"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-lg-4">
                    <form class="mb-30" action="">
                        <div class="input-group">
                            <input type="text" class="p-4 border-0 form-control" placeholder="Coupon Code">
                            <div class="input-group-append">
                                <button class="btn btn-primary">Apply Coupon</button>
                            </div>
                        </div>
                    </form>
                    <h5 class="mb-3 section-title position-relative text-uppercase"><span class="pr-3 bg-secondary">Cart Summary</span></h5>
                    <div class="mb-5 bg-light p-30">
                        <div class="pb-2 border-bottom">
                            <div class="mb-3 d-flex justify-content-between">
                                <h6>Subtotal</h6>
                                <h6>$150</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-medium">Shipping</h6>
                                <h6 class="font-weight-medium">$10</h6>
                            </div>
                        </div>
                        <div class="pt-2">
                            <div class="mt-2 d-flex justify-content-between">
                                <h5>Total</h5>
                                <h5>$160</h5>
                            </div>
                            <button class="py-3 my-3 btn btn-block btn-primary font-weight-bold">Proceed To Checkout</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Cart End -->

    @endsection


    <!-- Footer Start -->
    <!-- Footer End -->
