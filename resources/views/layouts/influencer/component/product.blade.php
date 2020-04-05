<!-- product section start -->
@foreach($data as $value)
    @isset($relations )
        <div class="col-xl-2 col-md-4 col-sm-6">
    @endisset
    @isset($categories)
        <div class="col-lg-4 col-md-6 col-grid-box">
    @endisset
    <div class="product-box">
        <a href="{{ route($possition.'.products.show',['pid' => $value->id]) }}" title="">
        <div class="img-wrapper">
            @isset($new)
                <div class="lable-block">
                    <span class="lable3">new</span>
                </div>
            @endisset
            <div class="front">
                <img src="{{ asset('storage/'.$value->GetImage[0]->images) }}" class="img-fluid blur-up lazyload bg-img" alt="">
            </div>
            @isset($value->GetImage[1]->images)
                <div class="back">
                    <img src="{{ asset('storage/'.$value->GetImage[1]->images) }}" class="img-fluid blur-up lazyload bg-img" alt="">
                </div>
            @endisset
            <div class="cart-info cart-wrap">
                <a href="javascript:void(0)" title="{{ ($value->isFavorited()) ? 'Remove to Wishlist' : 'Add to Wishlist' }}">
                    <i class="{{ ($value->isFavorited()) ? 'fa fa-heart active' : 'ti-heart' }}" aria-hidden="true" pid="{{ $value->id }}"></i>
                </a>                                                
                <a href="#" data-toggle="modal" data-target="#quick-view" title="Quick View">
                    <i class="ti-search" aria-hidden="true"></i>
                </a>
            </div>
        </div>
        <div class="product-detail">
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <a href="product-page(no-sidebar).html"><h6>{{ $value->title }}</h6></a>
            <h4>{{ $value->GetPrice() }} 
                <del> {{ ($value->discount) ? number_format($value->price) : '' }} </del>
            </h4>
            {{-- <ul class="color-variant">
                <li class="bg-light0"></li>
                <li class="bg-light1"></li>
                <li class="bg-light2"></li>
            </ul> --}}
        </div>
        </a>
    </div>
    @isset($categories)
        </div>
    @endisset
    @isset($relations)
        </div>
    @endisset
@endforeach