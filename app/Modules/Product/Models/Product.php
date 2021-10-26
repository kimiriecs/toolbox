<?php

namespace App\Modules\Product\Models;

use Database\Factories\ProductFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public function analogs() {

        return $this->belongsToMany(Product::class, 'product_analog', 'product_id', 'analog_id');

    }

        protected static function newFactory()
    {
        return ProductFactory::new();
    }
}
