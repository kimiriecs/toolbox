<?php

namespace Modules\Categories\Database\Seeders;

use Modules\Categories\Models\Category;
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

        $rootCategory = 'categories';
        $mainCategories = ['users', 'ui components', 'relationships'];
        $subCategories = [
            ['administration', 'trainers', 'trainees', 'folowers'],
            ['buttons', 'inputs', 'checkboxes', 'radiobuttons', 'tables'],
            ['one to one', 'one to many', 'many to many', 'has one through', 'has many through', 'has one of many', 'polymorphic one to one', 'polymorphic one to many', 'polymorphic one of many', 'polymorphic many to many'],
        ];


        $cName = $rootCategory;
        $parent_id = null;
        Category::factory()->create(
            [
                'name' =>  $cName,
                'parent_id' =>  $parent_id,
                'slug' =>  Str::slug($cName),
            ]
        );

        foreach ($mainCategories as $mainCategory) {
            $cName = $mainCategory;
            $parent_id = 1;
            Category::factory()->create(
                [
                    'name' =>  $cName,
                    'parent_id' =>  $parent_id,
                    'slug' =>  Str::slug($cName),
                ]
            );
        }
        foreach ($subCategories as $key => $subCategory) {
            foreach ($subCategory as $category) {
                $cName = $category;
                $parent_id = $key + 2;
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