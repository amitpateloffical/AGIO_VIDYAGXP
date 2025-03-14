<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreMST extends Model
{
    use HasFactory;
    
    protected $table = 'itemmst';
    
    protected $connection = 'mysql2';

    public function binbts()
    {
        return $this->hasMany(BinBtBal::class, 'ItemCd', 'ItemCd');
    }
}
