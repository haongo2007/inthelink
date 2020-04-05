@extends('layouts.user.frame',['pageSlug' => 'Categories'])
@section('content')
<!-- breadcrumb start -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>collection</h2></div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb" class="theme-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">collection</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->


<!-- section start -->
<section class="section-b-space ratio_asos">
    <div class="collection-wrapper">
        <div class="container">
            <div class="row">
                <div class="collection-content col">
                    <div class="page-main-content">
                        <div class="top-banner-wrapper">
                            <a href="#"><img src="{{ asset('storage'.$categories->banner) }}" class="img-fluid blur-up lazyload fix-contain" alt=""></a>
                            <div class="top-banner-content small-section">
                                <h4>fashion</h4>
                                <h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                            </div>
                        </div>
                        <div class="collection-product-wrapper">
                            <div class="product-top-filter">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="product-filter-content">
                                            <div class="search-count">
                                                <h5>Showing Products 1-24 of 10 Result</h5></div>
                                            <div class="collection-view">
                                                <ul>
                                                    <li><i class="fa fa-th grid-layout-view"></i></li>
                                                    <li><i class="fa fa-list-ul list-layout-view"></i></li>
                                                </ul>
                                            </div>
                                            <div class="collection-grid-view">
                                                <ul>
                                                    <li><img src="{{ asset('images') }}/icon/2.png" alt="" class="product-2-layout-view"></li>
                                                    <li><img src="{{ asset('images') }}/icon/3.png" alt="" class="product-3-layout-view"></li>
                                                    <li><img src="{{ asset('images') }}/icon/4.png" alt="" class="product-4-layout-view"></li>
                                                    <li><img src="{{ asset('images') }}/icon/6.png" alt="" class="product-6-layout-view"></li>
                                                </ul>
                                            </div>
                                            <div class="product-page-per-view">
                                                <select>
                                                    <option value="High to low">24 Products Par Page</option>
                                                    <option value="Low to High">50 Products Par Page</option>
                                                    <option value="Low to High">100 Products Par Page</option>
                                                </select>
                                            </div>
                                            <div class="product-page-filter">
                                                <select>
                                                    <option value="High to low">Sorting items</option>
                                                    <option value="Low to High">50 Products</option>
                                                    <option value="Low to High">100 Products</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper-grid">
                                <div class="row">
                                @include('layouts.component.product', ['data' => $products,'categories' => true,'possition' => 'user'])
                                </div>
                            </div>
                            <div class="product-pagination">
                                <div class="theme-paggination-block">
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                            <nav aria-label="Page navigation">
                                                <ul class="pagination">
                                                    <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span> <span class="sr-only">Previous</span></a></li>
                                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span> <span class="sr-only">Next</span></a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                            <div class="product-search-count-bottom">
                                                <h5>Showing Products 1-24 of 10 Result</h5></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- section End -->
@endsection