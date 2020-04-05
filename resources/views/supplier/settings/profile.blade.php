@extends('layouts.supplier.frame',['page' => __('Settings'), 'pageSlug' => 'settings'])

@section('content')
<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Profile
                            <small>Inthelink Supplier panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Settings</li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="profile-details text-center">
                            <img src="{{ Auth('supplier')->user()->GetAvatar->path }}" alt="" class="img-fluid img-90 rounded-circle blur-up lazyloaded">
                            <h5 class="f-w-600 mb-0">{{ Auth('supplier')->user()->Getinfo->name }}</h5>
                            <span>{{ Auth('supplier')->user()->email }}</span>
                            <div class="social">
                                <div class="form-group btn-showcase">
                                    <button class="btn social-btn btn-fb d-inline-block"> <i class="fa fa-facebook"></i></button>
                                    <button class="btn social-btn btn-twitter d-inline-block"><i class="fa fa-google"></i></button>
                                    <button class="btn social-btn btn-google d-inline-block mr-0"><i class="fa fa-twitter"></i></button>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="project-status">
                            <h5 class="f-w-600">Employee Status</h5>
                            <div class="media">
                                <div class="media-body">
                                    <h6>Performance<span class="pull-right">80%</span></h6>
                                    <div class="progress sm-progress-bar">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <h6>Overtime <span class="pull-right">60%</span></h6>
                                    <div class="progress sm-progress-bar">
                                        <div class="progress-bar bg-secondary" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-body">
                                    <h6>Leaves taken<span class="pull-right">70%</span></h6>
                                    <div class="progress sm-progress-bar">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 70%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="card tab2-card">
                    <div class="card-body">
                        <div class="table-responsive profile-table">
                            <h5 class="f-w-600">Profile</h5>
                            <table class="table table-responsive">
                                <tbody>
                                <tr>
                                    <td>Full Name:</td>
                                    <td>{{ Auth('supplier')->user()->Getinfo->name }}</td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td>{{ Auth('supplier')->user()->email }}</td>
                                </tr>
                                <tr>
                                    <td>Gender:</td>
                                    <td>{{ Auth('supplier')->user()->Getinfo->gender }}</td>
                                </tr>
                                <tr>
                                    <td>Mobile Number:</td>
                                    <td>{{ Auth('supplier')->user()->Getinfo->phone }}</td>
                                </tr>
                                <tr>
                                    <td>DOB:</td>
                                    <td>{{ Auth('supplier')->user()->Getinfo->birthday }}</td>
                                </tr>
                                <tr>
                                    <td>Address:</td>
                                    <td>{{ Auth('supplier')->user()->Getinfo->address }}</td>
                                </tr>
                                <tr>
                                    <td>Bank Name:</td>
                                    <td>{{ Auth('supplier')->user()->GetBank->bank_name ?? null }}</td>
                                </tr>
                                <tr>
                                    <td>Bank Number:</td>
                                    <td>{{ Auth('supplier')->user()->GetBank->bank_number ?? null }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="pull-right">
                            <a href="{{ route('supplier.profile.edit' )}}" class="btn btn-primary">Edit</a>
                        </div>  
                    </div>
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
@endpush