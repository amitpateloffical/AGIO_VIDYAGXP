<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\barcode\product;
use Error;
use Illuminate\Http\Request;
use App\Models\BinBtBal;
use App\Models\StoreMST;
use App\Models\Qcarhd;

class ProductController extends Controller
{
    public  function get_product_by_barcode(Request $request)
    {
        $res = [
            'status' => 'ok',
            'message' => 'success',
            'body' => []
        ];

        try {
            $product = product::where('bar_code', $request->barCode)->first();

            if (!$product) {
                throw new Error('product not found');
            }

            $html = view('comps.barcode_row', compact('product'))->render();

            $res['body'] = $html;            

        } catch (\Exception $e) {
            $res['status'] = 'error';
            $res['message'] = $e->getMessage();
        }





        return response()->json($res);
    }
    
    public function fetch_item(Request $request)
    {
       $res = [
            'status' => 'ok',
            'message' => 'success',
            'body' => []
        ];
        
        try {
            
            // $binbtbal = BinBtBal::where('ItemCd', $request->item_code)->with(['items_master', 'qcarhd'])->first();

            $binbtbal = null;
            $qcarhd = null;
            
            $storemst = StoreMST::where('ItemCd', $request->item_code)->with('binbts')->first();

            if ($request->grn_no) {
                $binbtbal = BinBtBal::where('GrnBtchId', $request->grn_no)->where('ItemCd', $request->item_code)->with(['items_master', 'qcarhd'])->first();
                $qcarhd = Qcarhd::where([
                    'GrnBtchId' => $request->grn_no,
                    'ItemCd' => $request->item_code
                ])->first();
                // return $qcarhd;
            }

            
            $data = [
                'item_code' => '',
                'batch_status' => '',
                'item_name' => '',
                'location_code' => '',
                'store_code' => '',
                'GrnBtchId' => '',
                'ArId' => ''
            ];
            
            // $data['item_code'] = $storemst->ItemCd;
            $data['item_name'] = ($binbtbal && $binbtbal->items_master) ? $binbtbal->items_master->ItemName : '';
            $data['location_code'] = $qcarhd ? $qcarhd->LocCd : '';
            $data['GrnBtchId'] = collect($storemst->binbts)->pluck('GrnBtchId');
            $data['ARId'] = $binbtbal ? $binbtbal->ARId : '';
            $data['batch_status'] = $qcarhd ? $qcarhd->QcStatus : '';


            
            $res['body'] = $data;
            
        } catch (\Exception $e) {
            $res['status'] = 'error';
            $res['message'] = $e->getMessage();
        }
        
        return response()->json($res);
    }

}
