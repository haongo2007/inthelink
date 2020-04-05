@extends('layouts.supplier.frame',['page' => __('Brands'), 'pageSlug' => 'brands'])

@section('content')
<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Brands
                            <small>Inthelink Supplier panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Physical</li>
                        <li class="breadcrumb-item active">Category</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h5>Products Brands</h5>
                        <a href="{{ route('brands.create') }}" class="btn btn-primary">Add Brands</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="datatables" role="grid" aria-describedby="datatables_info">
                                <thead class="text-danger">
                                    <tr role="row">
                                        <th scope="col">{{ __('Name') }}</th>
                                        <th scope="col">{{ __('Sort') }}</th>
                                        <th scope="col">{{ __('Banner') }}</th>
                                        <th scope="col">{{ __('Creator') }}</th>
                                        <th scope="col">{{ __('Creation Date') }}</th>
                                        <th scope="col">{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.css') }}">
@endpush
@push('js')
    <script src="{{ asset('js/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('js/supplier/brand.js') }}"></script>
    
@include('supplier.alerts.success');
@include('supplier.alerts.errors');

@endpush