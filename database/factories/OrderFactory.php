<?php

namespace Database\Factories;

use App\Models\Order;
use App\Modules\Users\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Get IDs of all user's with role 'trainee'
        $users = User::whereHas('roles', function($q) {
            $q->where('name', 'trainee');
        })
        ->get(['id']);

        // create an array with users IDs
        $usersIds = [];

        foreach ($users as $key => $user) {
            $usersIds[$key] = $user->id;
        }

        // Flip the keys and values of $usersIds
        $usersIds = array_flip($usersIds);

        return [

            'order_number' => $this->faker->numberBetween(1000000001, 2147483647),

            'user_id' => array_rand($usersIds), //if user is trainee !!!

            'subscription_id' => $this->faker->numberBetween(1, 5),

        ];
    }
}
