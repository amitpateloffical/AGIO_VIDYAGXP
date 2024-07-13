<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewExpiry extends Model
{
    use HasFactory;
    protected $dates = [
        'expiry',
    ];
}
