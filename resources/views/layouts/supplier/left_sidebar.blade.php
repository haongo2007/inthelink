<!-- Page Sidebar Start-->
<div class="page-sidebar">
    <div class="main-header-left d-none d-lg-block">
        <div class="logo-wrapper">
            <h1 class="logobrand">INTHELINK</h1>
        </div>
    </div>
    <div class="sidebar custom-scrollbar">
        <div class="sidebar-user text-center">
            <div><img class="img-60 rounded-circle lazyloaded blur-up" src="{{ Auth('supplier')->user()->GetAvatar->path }}" alt="#">
            </div>
            <h6 class="mt-3 f-14">{{ Auth('supplier')->user()->GetInfo->name }}</h6>
            <p>general manager.</p>
        </div>
        <ul class="sidebar-menu">
            <li class="{{ ($pageSlug == 'home') ? 'actived' : '' }}">
                <a class="sidebar-header" href="{{ route('supplier.dashboard') }}">
                    <i data-feather="home"></i><span>{{ __('Dashboard') }}</span>
                </a>
            </li>
            <li class="{{ ($pageSlug == 'products') ? 'actived' : '' }}">
                <a class="sidebar-header" href="{{ route('products.index') }}">
                    <i data-feather="box"></i>
                    <span>{{ __('Products') }}</span>
                </a> 
                {{--<ul class="sidebar-submenu">
                    <li><a href="{{ route('categories.index') }}"><i class="fa fa-circle "></i>{{ __('Categories') }}</a></li>
                    <li><a href="{{ route('brands.index') }}"><i class="fa fa-circle"></i>{{ __('Brands') }}</a></li>
                </ul> --}}
            </li>
            <li class="{{ ($pageSlug == 'orders') ? 'actived' : '' }}">
                <a class="sidebar-header" href="{{ route('supplier.orders') }}">
                    <i data-feather="dollar-sign"></i>
                    <span>{{ __('Orders') }}</span>
                </a>
            </li>
            <li class="{{ ($pageSlug == 'request_sample' || $pageSlug == 'request_sell') ? 'actived' : '' }}">
                <a class="sidebar-header" href="#">
                    <img src="{{ asset('images/icon/paperplane.png') }}" style="margin-right: 14px">
                    <span>{{ __('Requests') }}</span>
                    <i class="fa fa-angle-right pull-right"></i>
                </a>
                <ul class="sidebar-submenu menu-open">
                    <li class="{{ ($pageSlug == 'request_sample') ? 'actived' : '' }}">
                        <a href="{{ route('supplier.requests.sample') }}"><i class="fa fa-circle"></i>{{ __('Sample') }}</a></li>
                    <li class="{{ ($pageSlug == 'request_sell') ? 'actived' : '' }}">
                        <a href="{{ route('supplier.requests.sell') }}"><i class="fa fa-circle "></i>{{ __('Sell') }}</a></li>
                </ul>
            </li>
            <li class="{{ ($pageSlug == 'report') ? 'actived' : '' }}">
                <a class="sidebar-header" href="">
                    <i data-feather="bar-chart"></i>
                    <span>{{ __('Report') }}</span>
                </a>
            </li>
            <li class="{{ ($pageSlug == 'settings') ? 'actived' : '' }}">
                <a class="sidebar-header" href="{{ route('supplier.settings') }}">
                    <i data-feather="settings" ></i>
                    <span>{{ __('Settings') }}</span>
                </a>
            </li>
            <li class="{{ ($pageSlug == 'invoice') ? 'actived' : '' }}">
                <a class="sidebar-header" href="{{ route('supplier.invoice') }}">
                    <i data-feather="archive"></i>
                    <span>{{ __('Invoice') }}</span>
                </a>
            </li>
            <li>
                <a class="sidebar-header" href="#" onclick="event.preventDefault();document.getElementById('logout-supplier').submit();">
                    <i data-feather="log-in"></i>
                    <span>{{ __('Logout') }}</span>
                </a>
                <form id="logout-supplier" action="{{ route('supplier.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
</div>
<!-- Page Sidebar Ends-->