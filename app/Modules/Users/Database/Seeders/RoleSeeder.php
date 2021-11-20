<?php

namespace Database\Seeders;

use App\Modules\Users\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [ 'owner', 'admin', 'trainer', 'trainee', 'folower', ];

        foreach ($roles as $role) {
            Role::factory()->create([
                'name' => $role,
            ]);
        }
    }
}
