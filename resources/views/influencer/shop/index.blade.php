@extends('layouts.influencer.frame')

@section('content')
<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>All Shop</h2></div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Shop</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->


<!--section start-->
<section class="collection section-b-space ratio_square ">
    <div class="container">
        <div class="row partition-collection">
        	@foreach($shop as $value)
            <div class="col-lg-3 col-md-6">
                <div class="collection-block">
                    <div><img src="{{ $value->banner_shop ? asset('storage'.$value->banner_shop) : asset('storage'.$value->GetAvatar->path) }}" class="img-fluid blur-up lazyload bg-img" alt=""></div>
                    <div class="collection-content">
                        <h4>({{ $value->CountProduct() }} products)</h4>
                        <h3>{{ $value->name_shop ? $value->name_shop : $value->GetInfo->name }}</h3>
                        <a href="{{ route('influencer.products.supplier',['uid'=>$value->id]) }}" class="btn btn-outline">Visit now !</a></div>
                </div>
            </div>
           	@endforeach
        </div>
    </div>
</section>
<!--Section ends-->
@endsection