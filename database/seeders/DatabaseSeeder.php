<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([

            UserSeeder::class,
            RoleSeeder::class,
            RoleUserSeeder::class,
            SubscriptionSeeder::class,
            OrderSeeder::class,
            ProductSeeder::class,
            ProductAnalogSeeder::class,
            CategorySeeder::class,

        ]);

    }
}
