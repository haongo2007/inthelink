<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categories;
use App\Models\Brands;
use App\Models\Products;
use App\Models\ImagesProducts;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\SupplierProductsRequest;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id_creator = Auth('supplier')->user()->id;
        $products = Products::ProductSupplier($id_creator);
        return view('supplier.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::With('Childs.Childs')->where('parent',Categories::PARENT_ID)->get();
        return view('supplier.product.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SupplierProductsRequest $request)
    {
        if ($request->available_sample) {
            $request->request->add(['available_sample' => true]);
        }
        if ($request->sell_influencer) {
            $request->request->add(['sell_influencer' => true]);
        }
        if ($request->sdr) {
            $request->request->add(['start_time_selling' => $request->start_time_selling]);
            $request->request->add(['end_time_selling' => $request->end_time_selling]);
        }
        $id_creator = Auth('supplier')->user()->id;
        $slug = Str::slug($request->title, '-');
        $request->request->add(['price' => str_replace(',', '', $request->price)]);
        $request->request->add(['slug' => $slug]);
        $request->request->add(['creator_id' => $id_creator]);
        $product = Products::create($request->all());

        if ($images = $request->file('file')) {
            foreach ($images as $image) {
                $extension = $image->getClientOriginalExtension();
                $filename  = Str::random(5).'.'.$extension;
                $image->storeAs('public/products/'.$id_creator.'/'.$product->id, $filename);
                $data[]   = ['images' => '/products/'.$id_creator.'/'.$product->id.'/'.$filename , 'product_id' => $product->id];
            }
            ImagesProducts::insert($data);
        }
        return redirect()->route('products.index')->withStatus(__('Products successfully created.'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands = Brands::all();
        $categories = Categories::With('Childs.Childs')->where('parent',Categories::PARENT_ID)->get();
        $product = Products::find($id);
        if (!$product) {
            return redirect()->back()->withErrors(__('This product update has failed'));
        }  
        return view('supplier.product.update',compact('product','categories','brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SupplierProductsRequest $request, $id)
    {
        $product = Products::find($id);
        if (!$product) {
            return redirect()->back()->withErrors(__('This product update has failed'));
        }  
        $id_creator = Auth('supplier')->user()->id;
        if ($request->rmfi) {
            $old_images = ImagesProducts::where('product_id',$product->id)->get();
            $pl_folder = 'public/';
            foreach ($old_images as $key => $value) {
                $old_file = $pl_folder.$value->images;
                if (Storage::exists($old_file)) {
                    Storage::delete($old_file);
                }
            }
            $product->GetImage()->delete();
        }
        if ($images = $request->file('file')) {
            foreach ($images as $image) {
                $extension = $image->getClientOriginalExtension();
                $filename  = Str::random(5).'.'.$extension;
                $image->storeAs('public/products/'.$id_creator.'/'.$product->id, $filename);
                $data[]   = ['images' => '/products/'.$id_creator.'/'.$product->id.'/'.$filename , 'product_id' => $product->id];
            }
            ImagesProducts::insert($data);
        }
        if ($request->available_sample) {
            $request->request->add(['available_sample' => true]);
        }else{
            $request->request->add(['available_sample' => false]);
        }
        if ($request->sell_influencer) {
            $request->request->add(['sell_influencer' => true]);
        }else{
            $request->request->add(['sell_influencer' => false]);
        }
        if ($request->sdr) {
            $request->request->add(['start_time_selling' => $request->start_time_selling]);
            $request->request->add(['end_time_selling' => $request->end_time_selling]);
        }else{
            $request->request->add(['start_time_selling' => null]);
            $request->request->add(['end_time_selling' => null]);
        }
        $request->request->add(['price' => str_replace(',', '', $request->price)]);
        $request->request->add(['slug' => Str::slug($request->title, '-')]);
        $request->request->add(['creator_id' => $id_creator]);
        $product->update($request->all());
        return redirect()->route('products.index')->withStatus(__('Products successfully updated.'));
    }
    public function destroy($id)
    {
        $product = Products::find($id);
        $old_images = $product->GetImage();
        $pl_folder = 'public/';
        foreach ($old_images as $key => $value) {
            $old_file = $pl_folder.$value->images;
            if (Storage::exists($old_file)) {
                Storage::delete($old_file);
            }
        }
        Storage::deleteDirectory($pl_folder.'products/'.$product->creator_id.'/'.$product->id);
        $product->delete();
        return redirect()->route('products.index')->withStatus(__('Products successfully deleted.'));
    }
    /**
     * update the status resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateStatus(Request $request)
    {
        $product = Products::where('id',$request->id)->update([
            'status' => DB::raw('NOT status')
        ]);
    }
}
