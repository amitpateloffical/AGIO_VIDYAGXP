<?php

namespace App\Models\barcode;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;


    protected $table = 'new_products';


    protected $fillable =[

        'batch_status', 'item_code', 'item_name', 'location_code', 'store', 'grn_batch_id', 
        'arn_id', 'container_no', 'container_status', 'brand_name', 'quantity_of_product', 
        'unit', 'weightPerPackage', 'totalWeight', 'item_description', 'batch_no', 
        'uom_branch', 'mfg_dt', 'exp_dt', 'pack_size', 'count_no', 'rec_qty', 
        'manufacturer', 'supplier', 'grn_no', 'grn_date', 'format_no', 'bar_code','print'
    ];


    public function containers()
    {
        return $this->hasMany(ProductContainer::class, 'new_product_id');
    }


}
