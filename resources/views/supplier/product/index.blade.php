@extends('layouts.supplier.frame',['page' => __('Products'), 'pageSlug' => 'products'])
@push('css')
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css') }}/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/component-custom-switch.min.css') }}">
@endpush
@section('content')

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Product List
                            <small>Inthelink Supplier panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Physical</li>
                        <li class="breadcrumb-item active">Product List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row products-admin ratio_asos">
            <div class="col-12 mb-4">
               <a href="{{ route('products.create') }}" class="btn btn-info">
                    <i class="fa fa-plus" aria-hidden="true"></i> 
                    Add Product
                </a>
            </div>
            @foreach($products as $value)

            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body product-box">
                        <div class="img-wrapper">
                            <div class="front">
                                <a href="#">
                                    <img src="@isset($value->GetImage[0]->images) {{ asset('storage/'.$value->GetImage[0]->images) }} @endisset" class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                <div class="product-hover">
                                    <ul>
                                        <li>
                                            <a href="{{ route('products.edit', $value) }}" class="btn" title=""><i class="ti-pencil-alt"></i></a>
                                        </li>
                                        <li>
                                            <form action="{{ route('products.destroy', $value) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <a href="#" class="btn" title="" onclick="confirm('{{ __("Are you sure you want to delete this record") }}') ? this.parentElement.submit() : ''" ><i class="ti-trash"></i></a>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="product-detail">
                            <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i></div>
                            <a href="#">
                                <h6>{{ $value->title }}</h6>
                            </a>
                            <h4>
                                {{ $value->GetPrice() }}
                                <del>{{ $value->discount > 0 ? number_format($value->discount) : '' }}</del>
                            </h4>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection
@push('js')
    @include('supplier.alerts.success');
    @include('supplier.alerts.errors');
    <script src="{{ asset('js/supplier/products.js') }}" type="text/javascript" charset="utf-8" async defer></script>
@endpush