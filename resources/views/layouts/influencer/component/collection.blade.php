<section class="section-b-space ratio_asos pt-0">
    <div class="collection-wrapper">
        <div class="container">
            <div class="row">
                <div class="collection-content col">
                    <div class="page-main-content">
                        <div class="collection-product-wrapper">
                            <div class="product-top-filter">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="product-filter-content">
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
                                            <div class="product-page-per-view filtersproducts">
                                                <select path="{{ $products->path().'?count=' }}">
                                                    <option disabled selected>Choose Option</option>
                                                    <option value="12">12 Products Per Page</option>
                                                    <option value="24">24 Products Per Page</option>
                                                    <option value="36">36 Products Per Page</option>
                                                </select>
                                            </div>
                                            <div class="product-page-filter filtersproducts">
                                                <select path="{{ $products->path().'?sort=' }}">
                                                    <option disabled selected>Choose Option</option>
                                                    <option value="desc">Desc</option>
                                                    <option value="asc">ASC</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-wrapper-grid">
                                <div class="row">
                                    @include('layouts.influencer.component.product', 
                                    ['data' => $products,'categories' => true,'possition' => 'influencer'])
                                </div>
                            </div>
                            
                            <div class="product-pagination">
                                <div class="theme-paggination-block">
                                    <div class="row">
                                        <div class="col-xl-6 col-md-6 col-sm-12">
                                            {{ $products->appends(request()->input())->links() }}
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