<?php

namespace App\Http\Controllers\Supplier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Products;
use App\Models\Requests;
use Carbon\Carbon;

class RequestSellController extends Controller
{
    public function index(Requests $requestsell, Request $request)
    {
        if(Request()->ajax()) {
            $query = Requests::with('Influencer.GetInfo','Product.GetImage','Product:id,title')
            ->Where('s_id',Auth('supplier')->user()->id)
            ->where('type','sell')
            ->orderBy('id','desc');

            return DataTables::of($query)

            ->editColumn('influencer', function($row) {
                return '<a href="'.route('supplier.profile.edit',['id'=>$row->Influencer->id]).'"><div class="d-flex vendor-list">
                    <span>'.$row->Influencer->GetInfo->name.'</span>
                </div></a>';
            })

            ->editColumn('product', function($row) {
                return '<div class="d-flex vendor-list"> 
                            <img src="'.asset('storage').$row->Product->GetImage[0]->images.'" alt="" class="img-fluid img-40 rounded-circle blur-up lazyloaded">
                            <span>'.$row->Product->title.'</span>
                        </div>';
            })

            ->editColumn('status', function($row) {
                if ($row->status == 0) {
                    return '<span class="badge p-2 badge-warning">Waiting</span>';
                }elseif($row->status == 1){
                    return '<span class="badge p-2 badge-primary">Accept</span>';
                }else{
                    return '<span class="badge p-2 badge-secondary">Decline</span>';
                }
            })

            ->editColumn('created_at', function($row) {
                return Carbon::parse($row->created_at)->calendar();
            })

            ->addColumn('action', function($row) {
                return view('supplier.component.action_button_rq',compact('row'));
            })
            
            ->rawColumns(['status','influencer','product'])
            ->addIndexColumn()
            ->make(true);
        }
        return view('supplier.requestsell.index',['rqsell' => $requestsell->paginate(5)]);
    }
    public function updateStatus($id,$stt)
    {
        $rq = Requests::find($id);
        if(!$rq){
            return redirect()->back()->withErrors(__('This request not exist'));
        }
        $rq->status = $stt;
        $rq->save();

        $product = Products::where('id',$rq->p_id)->first()->update([
            'sell_influencer' => $stt
        ]);
        return redirect()->route('supplier.requests.sell')->withStatus(__('Request successfully updated.'));
    }
}
