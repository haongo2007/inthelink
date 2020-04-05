@extends('layouts.adminLogin')

@section('content')
<!-- page-wrapper Start-->
<div class="page-wrapper">
    <div class="authentication-box">
        <div class="container">
            <div class="row">
                <div class="col-md-5 p-0 card-left">
                    <div class="card bg-primary">
                        <div class="svg-icon">
                            <img src="{{ asset('images/icon/loginicon.svg') }}" alt="" width="100%">
                        </div>

                        <div class="single-item">
                            <div>
                                <div>
                                    <h3>Welcome to Inthelink</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <h3>Welcome to Inthelink</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                </div>
                            </div>
                            <div>
                                <div>
                                    <h3>Welcome to Inthelink</h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 p-0 card-right">
                    <div class="card tab2-card">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="top-profile-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><span class="icon-user mr-2"></span>Login</a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><span class="icon-unlock mr-2"></span>Register</a>
                                </li> --}}
                            </ul>
                            <div class="tab-content" id="top-tabContent">
                                <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                                    <form method="POST" action="{{ route('admin.login') }}" class="form-horizontal auth-form">
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
                                        <div class="form-terms">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing" {{ old('remember') ? 'checked' : '' }} name="remember">
                                                <label class="custom-control-label" for="customControlAutosizing">{{ __('Remember Me') }}</label>
                                                @if (Route::has('password.request'))
                                                    <a href="{{ route('password.request') }}" class="btn btn-default forgot-pass">{{ __('Lost Your Password?') }}</a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-button">
                                            <button class="btn btn-primary" type="submit">{{ __('Login') }}</button>
                                        </div>
                                        <div class="form-footer">
                                            <span>Or Login up with social platforms</span>
                                            <ul class="social">
                                                <li><a class="icon-facebook" href=""></a></li>
                                                <li><a class="icon-twitter" href=""></a></li>
                                                <li><a class="icon-instagram" href=""></a></li>
                                                <li><a class="icon-pinterest" href=""></a></li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                                {{-- <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                                    <form class="form-horizontal auth-form">
                                        <div class="form-group">
                                            <input required="" name="login[username]" type="email" class="form-control" placeholder="Username" id="exampleInputEmail12">
                                        </div>
                                        <div class="form-group">
                                            <input required="" name="login[password]" type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <input required="" name="login[password]" type="password" class="form-control" placeholder="Confirm Password">
                                        </div>
                                        <div class="form-terms">
                                            <div class="custom-control custom-checkbox mr-sm-2">
                                                <input type="checkbox" class="custom-control-input" id="customControlAutosizing1">
                                                <label class="custom-control-label" for="customControlAutosizing1"><span>I agree all statements in <a href=""  class="pull-right">Terms &amp; Conditions</a></span></label>
                                            </div>
                                        </div>
                                        <div class="form-button">
                                            <button class="btn btn-primary" type="submit">Register</button>
                                        </div>
                                        <div class="form-footer">
                                            <span>Or Sign up with social platforms</span>
                                            <ul class="social">
                                                <li><a class="icon-facebook" href=""></a></li>
                                                <li><a class="icon-twitter" href=""></a></li>
                                                <li><a class="icon-instagram" href=""></a></li>
                                                <li><a class="icon-pinterest" href=""></a></li>
                                            </ul>
                                        </div>
                                    </form>
                                </div> --}}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('user.home') }}" class="btn btn-primary back-btn"><i data-feather="arrow-left"></i>back</a>
        </div>
    </div>
</div>
@endsection
