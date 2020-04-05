@extends('layouts.influencer.frame')

@section('content')

<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Dashboard</h2></div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb End -->
<!-- section start -->
<section class="section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="account-sidebar"><a class="popup-btn">my account</a></div>
                <div class="dashboard-left">
                    <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left" aria-hidden="true"></i> back</span></div>
                    <div class="block-content">
                        <ul class="nav d-block my-nav">
                            <li class="{{ (!$errors->has('current_password')||!$errors->has('new_password')||!$errors->has('new_confirm_password')) ? 'active' : '' }}" data-toggle="tab" href="#home" >
                                <a href="#">Account Info</a>
                            </li>
                            <li class="{{ ($errors->has('current_password')||$errors->has('new_password')||$errors->has('new_confirm_password')) ? 'active' : '' }}" data-toggle="tab" href="#menu1">
                                <a href="#">Change Password</a>
                            </li>
                            <li><a href="{{ route('influencer.favorite') }}" >My Wishlist</a></li>
                            <li><a href="#" onclick="event.preventDefault();document.getElementById('logout-supplier').submit();" >Log Out</a></li>
                            <form id="logout-supplier" action="{{ route('influencer.logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 tab-content">
                <div class="dashboard-right tab-pane {{ (!$errors->has('current_password')||!$errors->has('new_password')||!$errors->has('new_confirm_password')) ? 'active' : '' }}" id="home">
                    <div class="dashboard">
                        <div class="page-title">
                            <h2>My Dashboard</h2></div>
                        <div class="welcome-msg">
                            <p>Hello, {{ Auth('influencer')->user()->GetInfo->name }} !</p>
                            <p>From your My Account Dashboard you have the ability to view a snapshot of your recent account activity and update your account information. Select a link below to view or edit information.</p>
                        </div>
                        <div class="box-account box-info">
                            <div class="box-head">
                                <h2>Account Information</h2>
                            </div>
                            <form action="{{ route('influencer.profile.updateProfile') }}" method="post" accept-charset="utf-8" id="form_profile">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="box">
                                            <div class="box-title">
                                                <input  type="text" class="border-0 w-100 form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth('influencer')->user()->GetInfo->name ? Auth('influencer')->user()->GetInfo->name : '' }}">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <a href="#">Name</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box">
                                            <div class="box-title">
                                                <input  type="text" class="border-0 w-100 form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth('influencer')->user()->email ? Auth('influencer')->user()->email : '' }}">
                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <a href="#">Email</a></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box">
                                            <div class="box-title">
                                                    <input  type="text" class="border-0 phone w-100 form-control form-control @error('phone') is-invalid @enderror" name="phone" value="{{ Auth('influencer')->user()->GetInfo->phone ? Auth('influencer')->user()->GetInfo->phone : '' }}">
                                                    @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <a href="#">Phone</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box">
                                            <div class="box-title disbl">
                                                <h3>
                                                    {{ Auth('influencer')->user()->GetInfo->gender ? Auth('influencer')->user()->GetInfo->gender : '' }}
                                                </h3>
                                                <a href="#">Gender</a></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box">
                                            <div class="box-title disbl">
                                                <h3>
                                                    {{ Auth('influencer')->user()->provider ? Auth('influencer')->user()->provider : '' }}
                                                </h3>
                                                <a href="#">Social Network</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box">
                                            <div class="box-title disbl">
                                                <h3>
                                                    {{ Auth('influencer')->user()->GetInfo->birthday ? Auth('influencer')->user()->GetInfo->birthday : '' }}
                                                </h3>
                                                <a href="#">Birthday</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-head">
                                    <h2>Bank Information</h2>
                                </div>
                                <div class="row">
                                    
                                    <div class="col-sm-6">
                                        <div class="box">
                                            <div class="box-title">
                                                <input type="text" class="border-0 w-75 form-control @error('bank_name') is-invalid @enderror" name="bank_name" 
                                                value="@isset(Auth('influencer')->user()->GetBank->bank_name){{Auth('influencer')->user()->GetBank->bank_name}} @endisset">
                                                @error('bank_name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <a href="#">Bank Name</a></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="box">
                                            <div class="box-title">
                                                <input type="text" class="border-0 bank w-75 form-control @error('bank_number') is-invalid @enderror" name="bank_number" value="@isset(Auth('influencer')->user()->GetBank->bank_number){{ Auth('influencer')->user()->GetBank->bank_number}} @endisset">
                                                @error('bank_number')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                                <a href="#">Bank Number</a></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mt-4">
                                        <button class="btn btn-sm btn-solid save-profile" type="submit">Save</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="dashboard-right tab-pane fade 
                            @if ($errors->has('current_password')||$errors->has('new_password')||$errors->has('new_confirm_password')) 
                            {{ 'show active' }} @endif" id="menu1">
                    <div class="dashboard">
                        <div class="page-title">
                            <h2>Change Password</h2></div>
                        <div class="box-account box-info">
                            <form action="{{ route('influencer.profile.updatePassword') }}" method="post" accept-charset="utf-8">
                                @csrf
                                <div class="row">
                                    @if(!Auth('influencer')->user()->change_password == 0)
                                    <div class="col-sm-12">
                                        <div class="box">
                                            <div class="box-title pb-0">
                                                <input type="password" name="current_password" class="w-100 border-0 form-control @error('current_password') is-invalid @enderror" style="height:50px" placeholder="current password">
                                                @error('current_password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="col-sm-12">
                                        <div class="box">
                                            <div class="box-title pb-0">
                                                <input type="password" name="new_password" class="w-100 border-0 form-control @error('new_password') is-invalid @enderror" style="height:50px" placeholder="new password">
                                                @error('new_password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="box">
                                            <div class="box-title pb-0">
                                                <input type="password" name="new_confirm_password" class="w-100 border-0 form-control @error('new_confirm_password') is-invalid @enderror" style="height:50px" placeholder="new confirm password">
                                                @error('new_confirm_password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <button type="submit" class="btn btn-solid mt-4">Change</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section end -->
@endsection
@push('js')
<script src="{{ asset('js/jquery.mask.min.js') }}" type="text/javascript" charset="utf-8" async defer></script>
<script>
    $(function(){
        $(".bank").mask("999 - 9999999999999 - 99");
        $(".phone").mask("(999) 999-9999");
    });
</script>
@endpush