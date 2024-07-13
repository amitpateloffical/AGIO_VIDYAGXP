<?php

namespace App\Models\barcode;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductContainer extends Model
{
    use HasFactory;


    protected $fillable = [
        'new_product_id', 'number', 'status'
    ];

    public function product()//container
    {
        return $this->belongsTo(product::class, 'id');
    }

}
