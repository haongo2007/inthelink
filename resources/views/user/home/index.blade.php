@extends('layouts.user.frame')

@section('content')

<!-- Home slider -->
<section class="p-0">
    <div class="slide-1 home-slider">
        <div>
            <div class="home text-center">
                <img src="{{ asset('images/exam/retangle0.jpg') }}" alt="" class="bg-img blur-up lazyload">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="slider-contain">
                                <div>
                                    <h4>welcome to fashion</h4>
                                    <h1>woman fashion</h1><a href="#" class="btn btn-solid">shop now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="home text-center">
                <img src="{{ asset('images/exam/Rectangl.png') }}" alt="" class="bg-img blur-up lazyload">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="slider-contain">
                                <div>
                                    <h4>welcome to fashion</h4>
                                    <h1>top collection</h1><a href="#" class="btn btn-solid">shop now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home slider end -->

<!-- collection banner -->
<section class="banner-padding banner-furniture ratio2_1">
    <div class="container-fluid">
        <div class="row partition3">
            @foreach($banner_categories as $key => $value)
            <div class="col-md-6 pt-15 pb-15">
                <a href="#">
                    <div class="collection-banner p-left text-left">
                        <div class="img-part">
                            <img src="{{ asset('storage'.$value->banner) }}" alt="" class="img-fluid blur-up lazyload bg-img">
                        </div>
                        <div class="contain-banner">
                            <div>
                                <h2>{{ $value->name }}</h2>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- collection banner end -->


<!-- Tab product -->
<div class="title1 section-t-space">
    <h4>exclusive products</h4>
    <h2 class="title-inner1">special products</h2>
</div>
<section class="section-b-space p-t-0 ratio_asos">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="theme-tab">
                    <ul class="tabs tab-title">
                        <li class="current"><a href="tab-4">New Products</a></li>
                        <li class=""><a href="tab-5">Featured Products</a></li>
                        <li class=""><a href="tab-6">Best Sellers</a></li>
                    </ul>
                    <div class="tab-content-cls">
                        <div id="tab-4" class="tab-content active default">
                            <div class="no-slider row">
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00 <del>$600.00</del></h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00 <del>$600.00</del></h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-5" class="tab-content">
                            <div class="no-slider row">
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00 <del>$600.00</del></h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00 <del>$600.00</del></h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="tab-6" class="tab-content">
                            <div class="no-slider row">
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="lable-block"><span class="lable3">new</span> <span class="lable4">on sale</span></div>
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-box">
                                    <div class="img-wrapper">
                                        <div class="front">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="back">
                                            <a href="product-page(no-sidebar).html"><img src="{{ asset('images/exam/examm.jpg') }}" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                        </div>
                                        <div class="cart-info cart-wrap">
                                            <button data-toggle="modal" data-target="#addtocart" title="Add to cart"><i class="ti-shopping-cart" ></i></button> <a href="javascript:void(0)" title="Add to Wishlist"><i class="ti-heart" aria-hidden="true"></i></a>                                                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View"><i class="ti-search" aria-hidden="true"></i></a> <a href="compare.html" title="Compare"><i class="ti-reload" aria-hidden="true"></i></a></div>
                                    </div>
                                    <div class="product-detail">
                                        <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                        <a href="product-page(no-sidebar).html">
                                            <h6>Slim Fit Cotton Shirt</h6>
                                        </a>
                                        <h4>$500.00</h4>
                                        <ul class="color-variant">
                                            <li class="bg-light0"></li>
                                            <li class="bg-light1"></li>
                                            <li class="bg-light2"></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tab product end -->


<!-- Parallax banner -->
<section class="p-0">
    <div class="full-banner parallax text-center p-left">
        <img src="{{ asset('images/exam/Rectangl.png') }}" alt="" class="bg-img blur-up lazyload">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="banner-contain">
                        <h2>2018</h2>
                        <h3>fashion trends</h3>
                        <h4>special offer</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Parallax banner end -->


<!-- product slider -->
<section class="">
    <div class="container">
        <div class="row multiple-slider">
            <div class="col-lg-3 col-sm-6">
                <div class="theme-card">
                    <h5 class="title-border">new products</h5>
                    <div class="offer-slider slide-1">
                        <div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images/exam/examm.jpg') }}" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00 <del>$600.00</del></h4>
                                </div>
                            </div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images/exam/examm.jpg') }}" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images/exam/examm.jpg') }}" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images/exam/examm.jpg') }}" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images') }}/fashion/product/1-.jpg" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images/exam/examm.jpg') }}" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="theme-card">
                    <h5 class="title-border">feature product</h5>
                    <div class="offer-slider slide-1">
                        <div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images/exam/examm.jpg') }}" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images/exam/examm.jpg') }}" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images/exam/examm.jpg') }}" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images/exam/examm.jpg') }}" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00 <del>$600.00</del></h4>
                                </div>
                            </div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images/exam/examm.jpg') }}" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images/exam/examm.jpg') }}" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="theme-card">
                    <h5 class="title-border">best seller</h5>
                    <div class="offer-slider slide-1">
                        <div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images/exam/examm.jpg') }}" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images/exam/examm.jpg') }}" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00 <del>$600.00</del></h4>
                                </div>
                            </div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images/exam/examm.jpg') }}" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images/exam/examm.jpg') }}" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images/exam/examm.jpg') }}" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images/exam/examm.jpg') }}" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00 <del>$600.00</del></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="theme-card">
                    <h5 class="title-border">on sell</h5>
                    <div class="offer-slider slide-1">
                        <div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images/exam/examm.jpg') }}" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images/exam/examm.jpg') }}" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images/exam/examm.jpg') }}" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00 <del>$600.00</del></h4>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images/exam/examm.jpg') }}" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images/exam/examm.jpg') }}" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                            <div class="media">
                                <a href="product-page(no-sidebar).html"><img class="img-fluid blur-up lazyload" src="{{ asset('images/exam/examm.jpg') }}" alt=""></a>
                                <div class="media-body align-self-center">
                                    <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                                    <a href="product-page(no-sidebar).html">
                                        <h6>Slim Fit Cotton Shirt</h6>
                                    </a>
                                    <h4>$500.00</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product slider end -->


<!-- instagram section -->
<section class="instagram ratio_square">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0">
                <h2 class="title-borderless"># instagram</h2>
                <div class="slide-7 no-arrow slick-instagram">
                    <div>
                        <a href="#">
                            <div class="instagram-box"><img alt="" src="{{ asset('images') }}/slider/2.jpg" class="bg-img" style="width:100%">
                                <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="instagram-box"><img alt="" src="{{ asset('images') }}/slider/3.jpg" class="bg-img" style="width:100%">
                                <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="instagram-box"><img alt="" src="{{ asset('images') }}/slider/4.jpg" class="bg-img" style="width:100%">
                                <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="instagram-box"><img alt="" src="{{ asset('images') }}/slider/9.jpg" class="bg-img" style="width:100%">
                                <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="instagram-box"><img alt="" src="{{ asset('images') }}/slider/6.jpg" class="bg-img" style="width:100%">
                                <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="instagram-box"><img alt="" src="{{ asset('images') }}/slider/7.jpg" class="bg-img" style="width:100%">
                                <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="instagram-box"><img alt="" src="{{ asset('images') }}/slider/8.jpg" class="bg-img" style="width:100%">
                                <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div> 
                    <div>
                        <a href="#">
                            <div class="instagram-box"><img alt="" src="{{ asset('images') }}/slider/9.jpg" class="bg-img" style="width:100%">
                                <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div>
                    <div>
                        <a href="#">
                            <div class="instagram-box"><img alt="" src="{{ asset('images') }}/slider/2.jpg" class="bg-img" style="width:100%">
                                <div class="overlay"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- instagram section end -->

@endsection
