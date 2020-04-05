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
            <div class="col-sm-12">
                <div class="card tab2-card">
                    <div class="card-body">
                        <form method="post" action="{{ route('supplier.profile.update') }}" enctype="multipart/form-data" class="needs-validation user-add" novalidate="">
                            @csrf
                            @method('put')
                            <h4>Account Details</h4>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="validationCustom0" ><span>*</span> Full Name</label>
                                    <input class="form-control col-xl-8 col-md-7 {{ $errors->has('name') ? ' is-invalid' : '' }}" id="validationCustom0" type="text" name="name" required value="{{ Auth('supplier')->user()->Getinfo->name ? Auth('supplier')->user()->Getinfo->name : '' }}">
                                    @include('supplier.alerts.feedback', ['field' => 'name'])
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="validationCustom1" ><span>*</span> Email</label>
                                    <input class="form-control col-xl-8 col-md-7 {{ $errors->has('email') ? ' is-invalid' : '' }}" id="validationCustom1" type="text" name="email" required value="{{ Auth('supplier')->user()->email ? Auth('supplier')->user()->email : '' }}">
                                    @include('supplier.alerts.feedback', ['field' => 'email'])
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="validationCustom2" ><span>*</span> Phone</label>
                                    <input class="form-control col-xl-8 col-md-7 phone {{ $errors->has('phone') ? ' is-invalid' : '' }}" id="validationCustom2" type="text" name="phone" required value="{{ Auth('supplier')->user()->Getinfo->phone ? Auth('supplier')->user()->Getinfo->phone : '' }}">
                                    @include('supplier.alerts.feedback', ['field' => 'phone'])
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="validationCustom3" ><span>*</span> Address</label>
                                    <input class="form-control col-xl-8 col-md-7 {{ $errors->has('address') ? ' is-invalid' : '' }}" id="validationCustom3" type="text" name="address" required value="{{ Auth('supplier')->user()->Getinfo->address ? Auth('supplier')->user()->Getinfo->address : '' }}">
                                    @include('supplier.alerts.feedback', ['field' => 'address'])
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="validationCustom4" ><span>*</span> Bank Name</label>
                                    <input class="form-control col-xl-8 col-md-7 {{ $errors->has('bank_name') ? ' is-invalid' : '' }}" id="validationCustom4" type="text" name="bank_name" required value="@isset(Auth('supplier')->user()->GetBank->bank_name) {{Auth('supplier')->user()->GetBank->bank_name }} @endisset">
                                    @include('supplier.alerts.feedback', ['field' => 'bank_name'])
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="validationCustom5" ><span>*</span> Bank Number</label>
                                    <input class="form-control col-xl-8 col-md-7 bank {{ $errors->has('bank_number') ? ' is-invalid' : '' }}" id="validationCustom5" type="text" name="bank_number" required value="@isset(Auth('supplier')->user()->GetBank->bank_number) {{Auth('supplier')->user()->GetBank->bank_number }} @endisset">
                                    @include('supplier.alerts.feedback', ['field' => 'bank_number'])
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="validationCustom6" ><span>*</span> Name Shop</label>
                                    <input class="form-control col-xl-8 col-md-7 {{ $errors->has('name_shop') ? ' is-invalid' : '' }}" id="validationCustom6" type="text" name="name_shop" value="{{ Auth('supplier')->user()->name_shop ? Auth('supplier')->user()->name_shop : '' }}">
                                    @include('supplier.alerts.feedback', ['field' => 'name_shop'])
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="validationCustom7" ><span>*</span> Banner Shop</label>
                                    <input class="form-control col-xl-8 col-md-7 {{ $errors->has('file') ? ' is-invalid' : '' }}" id="validationCustom7" type="file" name="file">
                                    @include('supplier.alerts.feedback', ['field' => 'file'])
                                </div>
                            </div>

                            <div class="row">
                                @if(!Auth('supplier')->user()->change_password == 0)
                                <div class="form-group col-md-6">
                                    <label for="validationCustom8" ><span>*</span> Current Password</label>
                                    <input class="form-control col-xl-8 col-md-7 {{ $errors->has('current_password') ? ' is-invalid' : '' }}" id="validationCustom8" type="password" name="current_password">
                                    @include('supplier.alerts.feedback', ['field' => 'current_password'])
                                </div>
                                @endif
                                <div class="form-group col-md-6">
                                    <label for="validationCustom8" ><span>*</span> New password</label>
                                    <input class="form-control col-xl-8 col-md-7 {{ $errors->has('new_password') ? ' is-invalid' : '' }}" id="validationCustom8" type="password" name="new_password">
                                    @include('supplier.alerts.feedback', ['field' => 'new_password'])
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="validationCustom8" ><span>*</span> Confirm Password</label>
                                    <input class="form-control col-xl-8 col-md-7 {{ $errors->has('new_confirm_password') ? ' is-invalid' : '' }}" id="validationCustom8" type="password" name="new_confirm_password">
                                    @include('supplier.alerts.feedback', ['field' => 'new_confirm_password'])
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>
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
<script src="{{ asset('js') }}/jquery.mask.min.js"></script>
<script>
    $(function(){
        $(".phone").mask("(999) 999-9999");
        $(".bank").mask(" 9999 - 9999 - 9999 - 9");
    });
</script>
@endpush