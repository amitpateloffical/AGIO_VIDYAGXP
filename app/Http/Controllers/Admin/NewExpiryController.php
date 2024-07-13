<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\NewExpiry;
use Illuminate\Http\Request;

class NewExpiryController extends Controller
{
    public  function index()
    {
        $pageTitle  = 'New Expiry';
        $newexpMaterial = NewExpiry::all();
        return view('admin.newexpirymateriyal.index',compact('pageTitle','newexpMaterial'));
    }
    public function store(Request $request,$id=0){
     
        //     $newexp  = new NewExpiry();


        // $newexp->product_name = $request->product_name;
        // $newexp->product_code = $request->product_code;
        // $newexp->expiry = $request->expiry;
        
        // $newexp->location = $request->location;
        // $newexp->save();





        if ($id) {
            $newexp     = NewExpiry::findOrFail($id);
            $notification = ' updated successfully';
        } else {
            $newexp     = new NewExpiry();
            $notification = ' added successfully';
        }

        $newexp->product_name = $request->product_name;
        $newexp->product_code = $request->product_code;
        $newexp->expiry = $request->expiry;
        $newexp->location = $request->location;
        $newexp->save();
        $notify[] = ['success', $notification];
        
        return back()->withNotify($notify);
      return " create succes";
    }

    public function show(Request $request ,$id){
     
        $newexp  =  NewExpiry::find($id);
         return "succes update";
}

public function remove($id)
{
    $newexp = NewExpiry::findOrFail($id);

    if ($newexp->products_count) {
        $notify[] = ['error', 'You can\'t delete because, it has some products'];
        return back()->withNotify($notify);
    }
    $newexp->delete();
    $notify[] = ['success', ' deleted successfully'];
    return back()->withNotify($notify);
}
//     public function update(Request $request ,$id){
     
//         $newexp  =  NewExpiry::find($id);


//     $newexp->product_name = $request->name;
//     $newexp->product_code = $request->product_code;
//     $newexp->expiry = $request->expiry;
//     $newexp->location = $request->location;
//     $newexp->update();
//   return " create succes";
// }
}
