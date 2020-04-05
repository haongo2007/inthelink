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
                                    <h3>Welcome Supplier</h3>
                                    <p>알려지지 않은 좋은 상품을 홍보하며, 실시간으로 수익을 창출하세요!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 p-0 card-right">
                    <div class="card tab2-card">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                                <li class="nav-item w-100 text-center p-0">
                                    <a class="nav-link sup active w-100">LOGIN with your SNS</a>
                                </li>
                            </ul>
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ $errors->first() }}</strong> 
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @enderror
                            <div class="tab-content">
                                <ul class="social">
                                    <a href="{{ route('loginSocialite',['provider' => 'facebook','position' => 'supplier']) }}" title="">
                                        <li>
                                            <div class="logos sup">
                                                <img src="{{ asset('/images/icon/fb-sup.svg') }}" alt="">
                                            </div>
                                            <button class="btn btn-primary">
                                                Continue with Facebook
                                            </button>
                                        </li>
                                    </a>
                                    <a href="{{ route('loginSocialite',['provider' => 'zalo','position' => 'supplier']) }}" title="">
                                        <li>
                                            <div class="logos sup">
                                                    <img src="{{ asset('/images/icon/zalo-sup.svg') }}" alt="">
                                            </div>
                                            <button class="btn btn-primary">
                                                Continue with Zalo
                                            </button>
                                        </li>
                                    </a>
                                    <a href="{{ route('loginSocialite',['provider' => 'zalo','position' => 'supplier']) }}" title="">
                                        <li>
                                            <div class="logos sup">
                                                <img src="{{ asset('/images/icon/talk-sup.svg') }}" alt="">
                                            </div>      
                                            <button class="btn btn-primary">
                                                Continue with Kakaotalk
                                            </button>
                                        </li>
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
