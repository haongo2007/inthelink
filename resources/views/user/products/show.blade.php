@extends('layouts.user.frame',['pageSlug' => strtoupper($product->slug)])
@push('meta')
<meta property="og:url" content="{{ $long_link }}" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="{{ strtoupper($product->slug) }}" />
<meta property="og:description"        content="{{ $product->meta_description }}" />
<meta property="og:image"              content="{{ asset('storage'.$product->GetImage[0]->images) }}" />
@endpush
@section('content')
<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>product</h2></div>
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
                    <div class="col-lg-1 col-sm-2 col-xs-12">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="slider-right-nav">
                                    @foreach($product->GetImage as $value)
                                    <div><img src="{{ asset('storage'.$value->images) }}" alt="" class="img-fluid blur-up lazyload"></div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-10 col-xs-12 order-up">
                        <div class="product-right-slick">
                            @foreach($product->GetImage as $key => $value)
                            <div>
                                <img src="{{ asset('storage'.$value->images) }}" alt="" class="img-fluid blur-up lazyload image_zoom_cls-{{$key}}">
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="product-right product-description-box">
                            <h2>{{ $product->title }}</h2>
                            <div class="border-product">
                                <h6 class="product-title">product details</h6>
                                <p>{!! $product->description !!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="product-right product-form-box">
                            @if($product->discount)
                            <h4>
                                <del>{{ number_format($product->price) }}</del>
                                <span>{{ number_format($product->discount / $product->price * 100) }}% off</span>
                            </h4>
                            @endif
                            <h3>{{ $product->GetPrice() }}</h3> 
                            <div class="product-description border-product">
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
                                        <span>0 <span class="padding-l">:</span> <span class="timer-cal">Days</span> </span>
                                        <span>0 <span class="padding-l">:</span> <span class="timer-cal">Hrs</span> </span>
                                        <span>00 <span class="padding-l">:</span> <span class="timer-cal">Min</span> </span>
                                        <span>00 <span class="timer-cal">Sec</span></span>
                                    </p>
                                </div>
                                @endif
                                <h6 class="product-title">option</h6>
                                <div class="modal fade" id="sizemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Sheer Straight Kurta</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body"><img src="{{ asset('images') }}/size-chart.jpg" alt="" class="img-fluid blur-up lazyload"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="size-box">
                                    <div class="row">
                                        <div class="form-check">
                                            <input class="radio_animated form-check-input" type="radio" name="exampleRadios1" id="exampleRadios4" value="option4" checked="">
                                            <label class="form-check-label" for="exampleRadios4">
                                                Option 1
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="radio_animated form-check-input" type="radio" name="exampleRadios1" id="exampleRadios5" value="option5">
                                            <label class="form-check-label" for="exampleRadios5">
                                                Option 2
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="radio_animated form-check-input" type="radio" name="exampleRadios1" id="exampleRadios6" value="option6">
                                            <label class="form-check-label" for="exampleRadios6">
                                                Option 3
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <h6 class="product-title">quantity</h6>
                                <div class="qty-box">
                                    <div class="input-group">
                                        <span class="input-group-prepend">
                                            <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">
                                                <i class="ti-angle-left"></i>
                                            </button>
                                        </span>
                                        <input type="text" name="quantity" class="form-control input-number" value="1"> 
                                        <span class="input-group-prepend">
                                            <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">
                                                <i class="ti-angle-right"></i>
                                            </button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="product-buttons">
                                <a href="#" class="btn btn-solid add-cart" id="{{ $product->id }}">add to cart</a> 
                                <a href="#" class="btn btn-solid">buy now</a>
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
                    <h2>related products</h2></div>
                </div>
                <div class="row search-product">
                    @include('layouts.influencer.component.product', ['data' => $product_relations,'relations' => true,'possition' => 'user'])
                </div>
            </div>
            @endif
        </section>
        <!-- product section end -->
        <!-- product-tab ends -->
        @endsection
        @push('js')
        <script src="{{ asset('js') }}/jquery.elevatezoom.js"></script>
        <script src="{{ asset('js') }}/timer.js"></script>
        <script src="{{ asset('js') }}/user/cart.js"></script>
        @endpush
        
        