<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BinBtBal extends Model
{
    use HasFactory;
    
    protected $table = 'binbtbal';
    
    protected $connection = 'mysql2';
    
    public function items_master()
    {
        return $this->belongsTo(StoreMST::class, 'ItemCd', 'ItemCd');
    }

    public function qcarhd()
    {
        return  $this->hasOne(Qcarhd::class, 'YrId', 'OpYrId');
    }
}
