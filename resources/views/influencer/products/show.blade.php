@extends('layouts.influencer.frame',['pageSlug' => 'Categories'])

@section('content')
<div class="mobile-fix-option">
    <ul class="footer-mobile">
        @if($product->sell_influencer == 1)
            <a href="javascript:void(0)">
                <li>
                    <i class="ti-link link-share" link="{{ $short_link }}" pid="{{ $product->id }}" aria-hidden="true"></i>
                </li>
            </a>
        @else
            <a href="javascript:void(0)"  data-toggle="modal" data-target="#requestsell">
                <li>
                    <i class="fa fa-money"></i>
                </li>
            </a>
        @endif
        <a href="javascript:void(0)">
            <li>
                <i class="{{ ($product->isFavorited()) ? 'fa fa-heart active' : 'ti-heart' }}" pid="{{ $product->id }}" aria-hidden="true"></i>
            </li>
        </a>
        @if($product->available_sample == 1)
            <a href="javascript:void(0)" data-toggle="modal" data-target="#requestsample">
                <li>
                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                </li>
            </a>
        @endif
    </ul>
</div>
<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>product</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">product</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->

<!-- section start -->
<section>
    <div class="collection-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="product-slick">
                        @foreach($product->GetImage as $key => $value)
                        <div>
                            <img src="{{ asset('storage'.$value->images) }}"class="img-fluid blur-up lazyload image_zoom_cls-{{ $key }}">
                        </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-12 p-0">
                            <div class="slider-nav">
                                @foreach($product->GetImage as $value)
                                <div>
                                    <img src="{{ asset('storage'.$value->images) }}" alt="" class="img-fluid blur-up lazyload">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 rtl-text">
                    <div class="product-right">
                        <h2>{{ $product->title }}</h2>
                        <h4>by <a href="{{ route('influencer.products.supplier',['uid' => $product->creator_id]) }}" title="">{{ $product->GetNameShop() }}</a></h4>
                        @if($product->discount > 0)
                        <h4><del>{{ number_format($product->price) }}</del>
                            <span>{{ $product->CaculatorPercentDiscount() }}% off</span></h4>
                            @endif
                            <h3>{{ $product->GetPrice() }}</h3>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>{!! $product->description !!}</p>
                            </div>
                            <div class="border-product border-product-tool">
                                <div class="product-icon">
                                    @if($product->sell_influencer == 1)
                                    <button class="wishlist-btn cart-info link-share" link="{{ $short_link }}" pid="{{ $product->id }}">
                                        <i class="ti-link"></i>
                                        <span class="title-font">
                                            {{ __('Copy Link') }}
                                        </span>
                                    </button>
                                    @else
                                    <button class="wishlist-btn cart-info" data-toggle="modal" data-target="#requestsell">
                                        <i class="fa fa-money"></i>
                                        <span class="title-font">
                                            {{ __('Request to Sell') }}
                                        </span>
                                    </button>
                                    @endif
                                    <button class="wishlist-btn cart-info">
                                        <i class="{{ ($product->isFavorited()) ? 'fa fa-heart active' : 'ti-heart' }}" 
                                            pid="{{ $product->id }}"></i>
                                            <span class="title-font">
                                                {{ ($product->isFavorited()) ? 'Remove To WishList' : 'Add To WishList' }}
                                            </span>
                                        </button>
                                        @if($product->available_sample == 1)
                                        <button class="wishlist-btn cart-info" data-toggle="modal" data-target="#requestsample">
                                            <i class="fa fa-paper-plane"></i>
                                            <span class="title-font">
                                                {{ __('Request Sample') }}
                                            </span>
                                        </button>
                                        @endif
                                    </div>
                                </div>
                                <div class="border-product">
                                    @if($product->start_time_selling != null)
                                    @if(\Carbon\Carbon::now() < $product->start_time_selling)
                                    <h6 class="product-title">Time Opening</h6>
                                    <input type="hidden" value="{{ $product->start_time_selling }}" class="timecount">
                                    @else
                                    <h6 class="product-title">Time Closing</h6>
                                    <input type="hidden" value="{{ $product->end_time_selling }}" class="timecount">
                                    @endif
                                    <div class="timer">
                                        
                                        <p id="demo">
                                            <span>25 <span class="padding-l">:</span> <span class="timer-cal">Days</span> </span>
                                            <span>22 <span class="padding-l">:</span> <span class="timer-cal">Hrs</span> </span>
                                            <span>13 <span class="padding-l">:</span> <span class="timer-cal">Min</span> </span>
                                            <span>57 <span class="timer-cal">Sec</span></span>
                                        </p>
                                    </div>
                                    @endif
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section ends -->

<section class="section-b-space ratio_asos">
@if(count($product_relations) > 0)
<div class="container">
<div class="row">
    <div class="col-12 product-related">
        <h2>related products</h2>
    </div>
</div>
<div class="row search-product">
    @include('layouts.influencer.component.product', ['data' => $product_relations,'relations' => true,'possition' => 'influencer'])
</div>
</div>
@endif
</section>
<!-- product section end -->

@if($product->available_sample == 1)
<!-- Request sample modal popup start-->
<div class="modal fade bd-example-modal-lg cart-modal" id="requestsample" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
<div class="modal-content">
    <div class="modal-body modal1">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="modal-bg">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="review">Message</label>
                        <textarea class="form-control value-message" placeholder="Write Your Message" pid="{{ $product->id }}" sid="{{ $product->creator_id }}" 
                            type="sample" 
                            rows="10"></textarea>
                        </div>
                        <div class="col-md-12 text-center">
                            <button class="btn btn-solid send-request" type="button">
                                Send Your Message
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Request sample modal popup ends-->
@endif

@if($product->sell_influencer != 1)
<!-- Request sell modal popup start-->
<div class="modal fade bd-example-modal-lg cart-modal" id="requestsell" tabindex="-1" role="dialog" aria-hidden="true">
<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-body modal1">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-12">
                        <div class="modal-bg">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="review">Message</label>
                            <textarea class="form-control value-message" placeholder="Write Your Message" pid="{{ $product->id }}" sid="{{ $product->creator_id }}" 
                                type="sell" 
                                rows="10"></textarea>
                            </div>
                            <div class="col-md-12 text-center">
                                <button class="btn btn-solid send-request" type="button">
                                    Send Your Message
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Request sell modal popup ends-->
@endif
<div id="fb-root"></div>
<!-- product section end -->
@endsection
@push('js')
<script src="{{ asset('js') }}/jquery.elevatezoom.js"></script>
<script src="{{ asset('js') }}/timer.js"></script>
<script src="{{ asset('js') }}/influencer/product.js"></script>
@endpush