@extends('layouts.influencer.frame')

@section('content')

<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>wishlist</h2></div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active">wishlist</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!--section start-->
<section class="wishlist-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table cart-table table-responsive-xs">
                    <thead>
                    <tr class="table-head">
                        <th scope="col">image</th>
                        <th scope="col">product name</th>
                        <th scope="col">price</th>
                        <th scope="col">action</th>
                    </tr>
                    </thead>
                    @foreach($products as $key => $value)
                    <tbody>
                        <tr>
                            <td>
                                <a href="#"><img src="{{ asset('storage/'.$value->GetImage[0]->images) }}" alt=""></a>
                            </td>
                            <td>
                                <a href="#">{{ $value->title }}</a>
                                <div class="mobile-cart-content row">
                                    <div class="col-xs-3">
                                        <h2 class="td-color">{{ $value->GetPrice() }}</h2></div>
                                    <div class="col-xs-3">
                                        <h2 class="td-color">
                                            <a href="#" class="icon mr-1 remove-wish" pid="{{ $value->id }}">
                                                <i class="ti-close"></i> 
                                            </a>
                                            <a href="#" class="cart">
                                                <i class="ti-link"></i>
                                            </a>
                                        </h2>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h2>{{ $value->GetPrice() }}</h2></td>
                            <td>
                                <a href="#" class="icon mr-3 remove-wish" pid="{{ $value->id }}" title="remove">
                                    <i class="ti-close"></i> 
                                </a>
                                <a href="#" class="link-share" link="{{ $value->GetLinkShare() }}" pid="{{ $value->id }}" title="get link">
                                    <i class="ti-link"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
        <div class="row wishlist-buttons">
            <div class="col-12"><a href="#" class="btn btn-solid">continue product</a></div>
        </div>
    </div>
</section>
<!--section end-->
@endsection