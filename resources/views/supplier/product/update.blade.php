@extends('layouts.supplier.frame',['page' => __('Products'), 'pageSlug' => 'products'])
@push('css')
    <link rel="stylesheet" href="{{ asset('css') }}/daterangepicker.css">
@endpush
@section('content')
<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Add Products
                            <small>Multikart Admin panel</small>
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item">Physical</li>
                        <li class="breadcrumb-item active">Add Product</li>
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
                <div class="card">
                    <div class="card-header">
                        <h5>Add Product</h5>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation add-product-form" novalidate="" action="{{ route('products.update',$product) }}" enctype="multipart/form-data" method="post">
                        @csrf
                        @method('put')
                            <div class="row product-adding">
                                <div class="col-xl-5">
                                    <div class="add-product">
                                        <div class="row">
                                            <div class="col-xl-9 xl-50 col-sm-6 col-9">
                                                <img src="{{ asset('storage/'.$product->GetImage[0]->images) }}" alt="" class="img-fluid image_zoom_1 blur-up lazyloaded imavie">
                                                <div class="mt-4">
                                                    <input class="checkbox_animated" id="chk-stt" type="checkbox" name="rmfi" >
                                                    Remove all old image
                                                </div>      
                                            </div>
                                            <div class="col-xl-3 xl-50 col-sm-6 col-3">
                                                <ul class="file-upload-product">
                                                    @for($i = 0; $i < 6; $i++)
                                                        <li>
                                                            <div class="box-input-file">
                                                                <input class="upload" name="file[]" type="file">
                                                                @isset($product->GetImage[$i])
                                                                    <div class="containimg">
                                                                        <img src="{{ asset('storage/'.$product->GetImage[$i]->images) }}" alt="">
                                                                    </div>
                                                                    @else
                                                                    <i class="fa fa-plus"></i>
                                                                @endisset
                                                            </div>
                                                        </li>
                                                    @endfor
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-7">
                                    <div class="form">
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom01" class="col-xl-3 col-sm-4 mb-0">Title :</label>
                                            <input class="form-control col-xl-8 col-sm-7 {{ $errors->has('title') ? ' is-invalid' : '' }}" id="validationCustom01" type="text" required name="title" value="{{ $product->title }}" >
                                            @include('supplier.alerts.feedback', ['field' => 'title'])
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Price :</label>
                                            <input class="form-control col-xl-8 col-sm-7 money {{ $errors->has('price') ? ' is-invalid' : '' }}" id="validationCustom02" type="text" required name="price" value="{{ number_format($product->price) }}" >
                                            @include('supplier.alerts.feedback', ['field' => 'price'])
                                        </div>{{-- 
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">Discount :</label>
                                            <input class="form-control col-xl-8 col-sm-7 money" id="validationCustom02" type="text" required name="discount" value="{{ number_format($product->discount) }}" >
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">In stock :</label>
                                            <input class="form-control col-xl-8 col-sm-7 {{ $errors->has('in_stock') ? ' is-invalid' : '' }}" id="validationCustom02" type="text" required name="in_stock"  value="{{ $product->in_stock }}" >
                                            @include('supplier.alerts.feedback', ['field' => 'in_stock'])
                                        </div>
                                        <div class="form-group mb-3 row">
                                            <label for="validationCustom02" class="col-xl-3 col-sm-4 mb-0">SKU :</label>
                                            <input class="form-control col-xl-8 col-sm-7 {{ $errors->has('sku') ? ' is-invalid' : '' }}" id="validationCustom02" type="text" required name="sku" value="{{ $product->sku }}" >
                                            @include('supplier.alerts.feedback', ['field' => 'sku'])
                                        </div> --}}
                                    </div>
                                    <div class="form">
                                        <div class="form-group row">
                                            <label for="exampleFormControlSelect1" class="col-xl-3 col-sm-4 mb-0">Categories :</label>
                                            <select class="form-control digits col-xl-8 col-sm-7" id="exampleFormControlSelect1" name="categories_id">
                                                @foreach($categories as $value)
                                                    @if(count($value->Childs) < 1)
                                                        <option 
                                                        {{ $product->categories_id == $value->id ? 'selected' : '' }} 
                                                        value="{{ $value->id }}">{{ $value->name }}</option>
                                                        @else
                                                        <optgroup label="{{ $value->name }}">
                                                            @foreach($value->Childs as $child)
                                                                @if(count($child->Childs) < 1)
                                                                    <option 
                                                                    {{ $product->categories_id == $child->id ? 'selected' : '' }}  
                                                                    value="{{ $child->id }}">{{ $child->name }}</option>
                                                                @else
                                                                    @foreach($child->Childs as $child_less)
                                                                    <optgroup label="&nbsp;&nbsp;&nbsp;&nbsp;{{ $child->name }}">
                                                                        <option 
                                                                        {{ $product->categories_id == $child_less->id ? 'selected' : '' }}  
                                                                        value="{{ $child_less->id }}">
                                                                            &nbsp;&nbsp;&nbsp;&nbsp; {{ $child_less->name }} 
                                                                        </option>
                                                                    </optgroup>
                                                                    @endforeach
                                                                @endif
                                                            @endforeach
                                                        </optgroup>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    {{-- <div class="form">
                                        <div class="form-group row">
                                            <label for="exampleFormControlSelect2" class="col-xl-3 col-sm-4 mb-0">Brand :</label>
                                            <select class="form-control digits col-xl-8 col-sm-7" id="exampleFormControlSelect2" name="brands_id">
                                                @foreach($brands as $value)
                                                    <option value="{{ $value['id'] }}" {{ $value['id'] == $product->brands_id ? 'selected' : '' }} >{{ $value['name'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> --}}
                                    <div class="form">
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-sm-4">Description :</label>
                                            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                                <textarea id="editor1" name="description" cols="10" rows="4">{{ $product->description }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form">
                                        <div class="form-group row">
                                            <label class="col-xl-3 col-sm-4">Settings :</label>

                                            <div class="col-xl-8 col-sm-7 pl-0 description-sm">
                                                <div class="mb-1">
                                                    <input class="checkbox_animated" id="chk-avs" type="checkbox" name="available_sample" 
                                                    {{ $product->available_sample == 1 ? 'checked' : '' }}>
                                                    Sample Request
                                                </div>
                                                <div class="mb-1">
                                                    <input class="checkbox_animated" id="chk-sfi" type="checkbox" name="sell_influencer" 
                                                    {{ $product->sell_influencer == 1 ? 'checked' : '' }}>
                                                    Can Sell Everyone
                                                </div>
                                                <div class="mb-1">
                                                    <input class="checkbox_animated sdrange" id="chk-sdr" type="checkbox" name="sdr"
                                                    {{ $product->start_time_selling != null ? 'checked' : '' }}>
                                                    Set Selling Date
                                                    <input class="form-control inputrange mt-2 d-none" type="text">
                                                    <input class="form-control startday" name="start_time_selling" type="hidden" 
                                                    value="{{ $product->start_time_selling ? $product->start_time_selling : '' }}">
                                                    <input class="form-control endday" name="end_time_selling" type="hidden" 
                                                    value="{{ $product->end_time_selling ? $product->end_time_selling : '' }}">
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="offset-xl-3 offset-sm-4">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <button type="button" class="btn btn-light">Discard</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

</div>

@endsection
@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.js"></script>
    <script src="{{ asset('js') }}/daterangepicker/daterangepicker.js"></script>
    <script src="{{ asset('js') }}/daterangepicker/daterangepicker.custom.js"></script>
    <!-- ckeditor js-->
    <script src="{{ asset('js') }}/editor/ckeditor/ckeditor.js"></script>
    <script src="{{ asset('js') }}/editor/ckeditor/styles.js"></script>
    <script src="{{ asset('js') }}/editor/ckeditor/adapters/jquery.js"></script>
    <script src="{{ asset('js') }}/editor/ckeditor/ckeditor.custom.js"></script>
    <script src="{{ asset('js') }}/simple.money.format.js"></script>
    <script src="{{ asset('js') }}/jquery.elevatezoom.js"></script>
    <script src="{{ asset('js') }}/zoom-scripts.js"></script>
    <script>
        $('.money').simpleMoneyFormat()
    </script>
@endpush