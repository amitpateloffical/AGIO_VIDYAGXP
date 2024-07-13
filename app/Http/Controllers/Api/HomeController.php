<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\barcode\product;
use Error;
class HomeController extends Controller
{
    public function get_product_by_barcode(Request $request){
        return('api');
    }

    // public  function get_product_by_barcode(Request $request)
    // {
    //     dd($request->all());
    //     $res = [
    //         'status' => 'ok',
    //         'message' => 'success',
    //         'body' => []
    //     ];

    //     try {
    //         $product = product::where('bar_code', $request->barCode)->first();

    //         if (!$product) {
    //             throw new Error('product not found');
    //         }

    //         $html = view('comps.barcode_row', compact('product'))->render();

    //         $res['body'] = $html;            

    //     } catch (\Exception $e) {
    //         $res['status'] = 'error';
    //         $res['message'] = $e->getMessage();
    //     }

    // }


}
