<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\barcode\product;
use Error;
use Illuminate\Http\Request;
use App\Models\BinBtBal;

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
            
            $binbtbal = BinBtBal::where('ItemCd', $request->item_code)->with(['items_master', 'qcarhd'])->first();
            
            $data = [
                'item_code' => '',
                'batch_status' => '',
                'item_name' => '',
                'location_code' => '',
                'store_code' => '',
                'GrnBtchId' => '',
                'ArId' => ''
            ];
            
            $data['item_code'] = $binbtbal->ItemCd;
            $data['batch_status'] = $binbtbal->qcarhd ? $binbtbal->qcarhd->QCResult : '';
            $data['item_name'] = $binbtbal->items_master ? $binbtbal->items_master->ItemName : '';
            $data['location_code'] = $binbtbal->qcarhd ? $binbtbal->qcarhd->LocCd : '';
            $data['GrnBtchId'] = $binbtbal->GrnBtchId;
            $data['ARId'] = $binbtbal->ARId;
            
            $res['body'] = $data;
            
        } catch (\Exception $e) {
            $res['status'] = 'error';
            $res['message'] = $e->getMessage();
        }
        
        return response()->json($res);
    }

}
