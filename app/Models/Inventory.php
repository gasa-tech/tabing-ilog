<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory, SoftDeletes;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

}
