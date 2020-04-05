@extends('layouts.supplier.frame',['page' => __('Requests Sell'), 'pageSlug' => 'request_sell'])
@push('css')
<!-- Datatables css-->
<link rel="stylesheet" type="text/css" href="{{ asset('css/datatables.css') }}">
@endpush
@section('content')
<div class="page-body">
    
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Sell
                            <small>Inthelink Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Requests</li>
                        <li class="breadcrumb-item active">Sell</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
    
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h5>Requests Sell</h5>
            </div>
            <div class="card-body vendor-table">
                <div class="table-responsive">
                    <table class="datatables" id="basic-1">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Influencer</th>
                                <th>Product</th>
                                <th>Message</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
    
</div>
@endsection
@push('js')
@include('supplier.alerts.success');
@include('supplier.alerts.errors');
<!-- Datatable js-->
<script src="{{ asset('js/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js') }}/datatables/custom-basic.js"></script>
<script src="{{ asset('js') }}/supplier/rqsell.js"></script>
@endpush