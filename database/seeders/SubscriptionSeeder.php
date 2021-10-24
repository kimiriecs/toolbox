<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subscriptions = [ 'Trial' => 0, 'Simple' => 39999, 'Standard' => 59999, 'Pro' => 79999, 'Premium' => 99999, ];

        foreach ($subscriptions as $key => $value) {
            Subscription::factory()->create([
                'name' => $key,
                'price' => $value
            ]);
        }
    }
}
