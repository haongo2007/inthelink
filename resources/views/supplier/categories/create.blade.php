@extends('layouts.supplier.frame',['page' => __('Categories'), 'pageSlug' => 'categories'])

@section('content')
<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Create Categories
                            <small>Inthelink Supplier panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Categories </li>
                        <li class="breadcrumb-item active">Create Categories</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="card tab2-card">
            <div class="card-header">
                <h5>Categories Details</h5>
            </div>
            <div class="card-body">
                <form method="post" action="{{ route('categories.store') }}" autocomplete="off"  enctype="multipart/form-data">
                    @csrf
                    <div class="card-body ">
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Banner') }}</label>
                            <div class="col-sm-7">
                            	<div class="form-group{{ $errors->has('banner') ? ' has-danger' : '' }}">
	                                <input type="file" name="banner" class="form-control {{ $errors->has('banner') ? ' is-invalid' : '' }}">
	                                @include('supplier.alerts.feedback', ['field' => 'banner'])
	                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Name') }}</label>
                            <div class="col-sm-7">
                                <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                    <input class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" id="input-name" type="text" placeholder="{{ __('Name') }}" value="{{ old('name') }}"  autofocus>
                                    @include('supplier.alerts.feedback', ['field' => 'name'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">{{ __('Sort order') }}</label>
                            <div class="col-sm-7">
                                <div class="form-group{{ $errors->has('sort_order') ? ' has-danger' : '' }}">
                                    <input class="form-control form-control-alternative{{ $errors->has('sort_order') ? ' is-invalid' : '' }}" name="sort_order" id="input-sort_order" type="number" placeholder="{{ __('sort order') }}" value="{{ old('sort_order') }}"  autofocus>
                                    @include('supplier.alerts.feedback', ['field' => 'sort_order'])
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Parent</label>
                            <div class="col-sm-7">
                                <div class="form-group{{ $errors->has('parent') ? ' has-danger' : '' }}">
                                    <div class="btn-group bootstrap-select col-sm-12 pl-0 pr-0">
                                        <select class="form-control" name="parent">
                                            <option value="0">Is Parent</option>
                                            @foreach($data_tree as $key => $value)
                                                <option value="{{ $value['id'] }}" {{ $value['level'] == 2 ? 'disabled' : '' }}>
                                                {{ str_repeat('-', $value['level'] ).' '.$value['name'] }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                     @include('supplier.alerts.feedback', ['field' => 'parent'])
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
</div>
@endsection