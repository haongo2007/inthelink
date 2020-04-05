
@extends('layouts.adminLogin')

@section('content')
<!-- page-wrapper Start-->
<div class="page-wrapper">
    <div class="authentication-box">
        <div class="container">
            <div class="row">
                <div class="col-md-7 p-0 card-right">
                    <div class="card tab2-card">
                        <div class="card-body">
                            <form method="POST" action="{{ route('influencer.login') }}" class="form-horizontal auth-form">
                            @csrf
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ $errors->first() }}</strong> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @enderror
                            <div class="form-group">
                                <input required name="email" type="email" class="form-control" placeholder="{{ __('E-Mail Address') }}" id="exampleInputEmail1" value="{{ old('email') }}" >
                            </div>
                            <div class="form-group">
                                <input required name="password" type="password" class="form-control" placeholder="{{ __('Password') }}">
                            </div>
                            <div class="form-button">
                                <button class="btn btn-primary" type="submit">{{ __('Login') }}</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
