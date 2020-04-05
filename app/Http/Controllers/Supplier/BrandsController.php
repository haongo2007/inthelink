<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brands;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\SupplierBrandsRequest;

class BrandsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Brands $brands,Request $request)
    {
        if(Request()->ajax()) {
            return $datatables = datatables()->of($brands->select('*'))
            ->addColumn('action', function($row) {
                return view('supplier.component.action_button_brands' , compact('row'));
            })
            ->editColumn('banner', function($row) {
                return '<img src="'.asset('storage').$row->banner.'" alt="" style="max-width: 100px">';
            })
            ->editColumn('creator_id', function($row) {
                return $row->Supplier->GetInfo->name;
            })
            ->rawColumns(['action','banner'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('supplier.brands.index',['brands' => $brands->paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('supplier.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SupplierBrandsRequest $request, Brands $brands)
    {
        if($request->banner->isValid()){
            $imageName = time().'.'.$request->banner->extension();
            $request->banner->storeAs(
                'public/brands/'.Auth('supplier')->user()->id,$imageName
            );
            $brands->banner = '/brands/'.Auth('supplier')->user()->id.'/'.$imageName;
        }
        $brands->creator_id = Auth('supplier')->user()->id;
        $brands->name = $request->name;
        $brands->sort_order = $request->sort_order;
        $brands->save();
        return redirect()->route('brands.index')->withStatus(__('brands successfully created.'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands = Brands::find($id);
        return view('supplier.brands.update',compact('brands'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SupplierBrandsRequest $request, $id)
    {
        $brands = brands::find($id);
        if ($request->hasFile('banner')){
            if($request->banner->isValid()){
                $old_file = 'public/'.$brands->banner;
                if (Storage::exists($old_file)) {
                    Storage::delete($old_file);
                }
                $imageName = time().'.'.$request->banner->extension();
                $request->banner->storeAs(
                    'public/brands/'.Auth('supplier')->user()->id,$imageName
                );
                $brands->banner = '/brands/'.Auth('supplier')->user()->id.'/'.$imageName;;
            }
        }
        $brands->name = $request->name;
        $brands->sort_order = $request->sort_order;
        $brands->update();

        return redirect()->route('brands.index')->withStatus(__('brands successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brands = Brands::find($id);
        if ($brands->creator_id != Auth('supplier')->user()->id) {
            return redirect()->back()->withErrors(__('You are not the author of this categories'));
        }
        $old_file = 'public/'.$brands->banner;
        if (Storage::exists($old_file)) {
            Storage::delete($old_file);
        }
        $brands->delete();
        return redirect()->route('brands.index')->withStatus(__('brands successfully deleted.'));
    }
}
