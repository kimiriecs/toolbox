<?php

namespace Database\Seeders;

use App\Modules\Product\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductAnalogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::all();

        for ($i = 0; $i < 50; $i++) {

            $product = $products->random();

            $analog = DB::table('products')->inRandomOrder()->take(1)->pluck('id');

            if ($product->id === $analog[0]                                         // if $analog is a current $product
                ||                                                                  // OR
                in_array($analog[0], $product->analogs()->pluck('id')->toArray()))  // if current $product already attached to the current $analog
            {
                $i--;       // reset counter to the previous state
                continue;   // skip current iteration
            }
            // attach $product to the $analog in pivot table
            $product->analogs()->attach($analog);
        }

    }
}
