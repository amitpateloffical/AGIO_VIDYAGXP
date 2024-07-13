<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\barcode\product;
use Error;
use Illuminate\Http\Request;

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




}
