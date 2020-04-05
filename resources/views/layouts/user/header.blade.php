<header>
    {{-- <div class="mobile-fix-option"></div> --}}
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="header-contact">
                        <ul>
                            <li>Welcome to Our store Inthelink</li>
                            <li><i class="fa fa-phone" aria-hidden="true"></i>Call Us: 123 - 456 - 7890</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 text-right">
                    
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="main-menu">
                    
                    <div class="menu-left">
                        <div class="navbar">
                            <a href="javascript:void(0)" onclick="openNav()">
                                <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i></div>
                            </a>

                                <div id="mySidenav" class="sidenav">
                                    <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                                    <nav>
                                        <div onclick="closeNav()">
                                            <div class="sidebar-back text-left">
                                                <i class="fa fa-angle-left pr-2" aria-hidden="true"></i> Back
                                            </div>
                                        </div>
                                        <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                            <li><a href="{{ route('user.home') }}">{{ __('Home') }}</a></li>
                                            <li>
                                                <a href="#">{{ __('Categories') }}</a>
                                                <ul class="mega-menu clothing-menu">
                                                    <li>
                                                        <div class="row m-0">
                                                        @foreach($categories_menu as $key => $value)
                                                            <div class="col-xl-4">
                                                                <div class="link-section">
                                                                    <a href="{{ route('influencer.categories.show',['id' => $value->id]) }}" 
                                                                    title="{{ $value->name }}">
                                                                        <h5>{{ $value->name }}</h5>
                                                                    </a>
                                                                    <ul>
                                                                        @foreach($value->Childs as $child)
                                                                        <li>
                                                                            <a href="{{ route('influencer.categories.show',['id' => $child->id]) }}" title="{{ $child->name }}">
                                                                                {{ $child->name }}
                                                                            </a>
                                                                        </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="">{{ __('Collection') }}</a></li>
                                            <li><a href="">{{ __('Wishlist') }}</a></li>
                                        </ul>
                                    </nav>
                                </div>
                        </div>
                    </div>
                    <div class="brand-logo">
                        <a href="{{ route('user.home') }}">
                            <h1 class="m-0">INTHELINK</h1>
                        </a>
                    </div>
                    <div class="menu-right pull-right">
                        <div>
                            <div class="icon-nav">
                                <ul>
                                    <li class="onhover-div mobile-search">
                                        <div><img src="{{ asset('images') }}/icon/search.png" onclick="openSearch()" class="img-fluid blur-up lazyload" alt="">
                                            <i class="ti-search" onclick="openSearch()"></i></div>
                                        <div id="search-overlay" class="search-overlay">
                                            <div>
                                                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                                                <div class="overlay-content">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-xl-12">
                                                                <form>
                                                                    <div class="form-group">
                                                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Search a Product">
                                                                    </div>
                                                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="onhover-div mobile-cart">
                                        <div>
                                            <img src="{{ asset('images') }}/icon/cart.png" class="img-fluid blur-up lazyloaded" alt=""> 
                                            <i class="ti-shopping-cart"></i>
                                        </div>
                                        <ul class="show-div shopping-cart">
                                            
                                        </ul>
                                    </li>
                                    {{-- <li class="onhover-div mobile-setting">
                                        <div><img src="{{ asset('images') }}/icon/setting.png" class="img-fluid blur-up lazyload" alt="">
                                            <i class="ti-settings"></i></div>
                                        <div class="show-div setting">
                                            <h6>language</h6>
                                            <ul>
                                                <li><a href="#">english</a> </li>
                                                <li><a href="#">french</a> </li>
                                            </ul>
                                            <h6>currency</h6>
                                            <ul class="list-inline">
                                                <li><a href="#">EUR</a> </li>
                                                <li><a href="#">USD</a> </li>
                                            </ul>
                                        </div>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>