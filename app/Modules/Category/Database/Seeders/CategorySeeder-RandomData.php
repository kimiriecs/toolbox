<?php

namespace App\Modules\Category\Database\Seeders;

use App\Modules\Category\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;

        for ($i=0; $i < $count; $i++) { 

            if ( $i < 1 ) {

                $cName = 'Без категории';
                $parent_id = null;
                Category::factory()->create(
                    [
                        'name' =>  $cName,
                        'parent_id' =>  $parent_id,
                        'slug' =>  Str::slug($cName),
                      ]
                );
            } else {

                $cName = 'Категория №'.$i;
                $parent_id = ($i > 4) ? rand(1, 4) : 1;
    
                Category::factory()->create(
                    [
                        'name' =>  $cName,
                        'parent_id' =>  $parent_id,
                        'slug' =>  Str::slug($cName),
                    ]
                );
            }
                            
        }

    }
}
