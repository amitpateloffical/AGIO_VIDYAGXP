<?php
 
namespace App\Http\Controllers;
 
use App\Models\barcode\product;
use App\Models\barcode\ProductContainer;

use Milon\Barcode\DNS1D;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;

class ProductController extends Controller
{

    protected $pageTitle;

    public function __construct()
    {
        $this->pageTitle = 'Barcode';
    }

    public function index(){
        $products = product::all();
        
        return view('index',compact('products'));
    }
 
    public function create(){
        $pageTitle = $this->pageTitle;
        return view('create',compact('pageTitle'));
    }
 
    public function store(Request $request)
    {
        $number = mt_rand(1000000000, 9999999999);

        while ($this->productCodeExists($number)) {
            $number = mt_rand(1000000000, 9999999999);
        }

        $request['bar_code'] = $number;
        $product = Product::create($request->all());

        if (!empty($request->containers)) {
            foreach ($request->containers as $containerData)
             {
               // dd($containerData);
                $container = new ProductContainer();
                $container->new_product_id = $product->id;
                $container->number = $containerData['number'];
                $container->status = $containerData['status'];
                $container->save();
            }
            
        }

        return redirect('/all-barcode');
    }

    private function productCodeExists($number)
    {
        return Product::where('bar_code', $number)->exists();
    }

    public function print($id)
        {
            //dd($id);
            $product = product::find($id);
             // return $products;
            if (!$product) {
                return redirect()->route('index')->with('error', 'Product not found.');
            }

            return view('print', compact('product'));
        
        }

    public function show()
    {
        $pageTitle = $this->pageTitle;
        return view("show", compact('pageTitle'));
     }

     
     public function document()
    {
        $pdf = Pdf::loadView('comps.document2');
        return $pdf->stream();
     }
 
     public function Editshow($id)
     {
       $data =product::find($id);
       $pageTitle = $this->pageTitle;
      return view("editshow",compact('data', 'pageTitle'));
      }


      public function update(Request $request, $id)
      {
        $product = product::findOrFail($id);
       // $product1 = ProductContainer::findOrFail($id);
        
        // return $product;
        $product->batch_status = $request->batch_status;
        $product->item_code = $request->item_code;
        $product->item_name = $request->item_name;
        $product->location_code = $request->location_code;
        $product->store = $request->store;
        $product->grn_batch_id = $request->grn_batch_id;
        $product->arn_id = $request->arn_id;
        $product->container_no = $request->container_no;
        $product->brand_name = $request->brand_name;
        $product->quantity_of_product = $request->quantity_of_product;
        $product->unit = $request->unit;
        $product->weightPerPackage = $request->weightPerPackage;
        $product->totalWeight = $request->totalWeight;
        $product->item_description = $request->item_description;
        $product->batch_no = $request->batch_no;

        $product->uom_branch = $request->uom_branch;
        $product->mfg_dt = $request->mfg_dt;
        $product->exp_dt = $request->exp_dt;
        $product->no_of_cont = $request->no_of_cont;
        $product->pack_size = $request->pack_size;
        $product->count_no = $request->count_no;
        $product->rec_qty = $request->rec_qty;
        $product->manufacturer = $request->manufacturer;
        $product->supplier = $request->supplier;
        $product->grn_no = $request->grn_no;
        $product->grn_date = $request->grn_date;
        $product->format_no = $request->format_no;
        $product->printed_by = $request->printed_by;
       // $product1->status = $request->status;
        
       if ($request->has('generate_new_barcode')) {
        $number = mt_rand(1000000000, 9999999999);
        
        // Check if the generated barcode already exists, generate a new one if it does
        while ($this->productCodeExists($number)) {
            $number = mt_rand(1000000000, 9999999999);
        }
            
        // Update the barcode in the request
        $product->bar_code = $number;
    }

    //return $product;
    // Save the updated product
    $product->save();

    // Redirect back to the view page or any other page after updating the product
    return redirect('/all-barcode');
} 


public function updateStatus($container)
{
    $container = ProductContainer::findOrFail($container);
    
    $container->status = $container->status == 'ok' ? 'leakage_damage' : 'ok'; // Update the status as per your requirement



    $container->save();

    return redirect()->back()->with('success', 'Container status updated successfully.');
}

public function dashboard()
{
    $pageTitle = $this->pageTitle;
    //$products = product::all();
    $products = Product::orderBy('created_at', 'desc')->get();

    return view('dashboard',compact('products','pageTitle'));
    
   
}
//------------------------grid Data ----------------------------------------


public function gridData()
{
    return view('gridData');


}


   
}