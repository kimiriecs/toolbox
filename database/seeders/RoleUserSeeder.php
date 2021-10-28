<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $roles = [ 'owner', 'admin', 'trainer', 'trainee', 'folowers', ]; 


        $ownersCount = 1;
        $adminsCount = 3;
        $trainersCount = 7;
        $traineesCount = 50;
        
        $lastOwnerId = $ownersCount;
        $lastAdminId = $lastOwnerId + $adminsCount;
        $lastTrainerId = $lastAdminId + $trainersCount;


        // Create the owner
        $owners = User::query()
                    ->where('id', '<=', $lastOwnerId)
                    ->get();
        $ownerRole = Role::query()
                    ->where('name', 'owner')
                    ->first();
        foreach ($owners as $owner) {
            RoleUser::factory()->create([
                'user_id' => $owner->id,
                'role_id' => $ownerRole->id,
            ]);
        }


        // Create the admin
        $admins = User::query()
                        ->where('id', '>', $lastOwnerId)
                        ->where('id', '<=', $lastAdminId)
                        ->get();

        $adminRole = Role::query()
                        ->where('name', 'admin')
                        ->first();

        foreach ($admins as $admin) {
            RoleUser::factory()->create([
                'user_id' => $admin->id,
                'role_id' => $adminRole->id,
            ]);
        }

        // Create the trainers
        $trainers = User::query()
                        ->where('id', '>', $lastAdminId)
                        ->where('id', '<=', $lastTrainerId)
                        ->get();

        $trainerRole = Role::query()
                        ->where('name', 'trainer')
                        ->first();

        foreach ($trainers as $trainer) {
            RoleUser::factory()->create([
                'user_id' => $trainer->id,
                'role_id' => $trainerRole->id,
            ]);
        }

        // Create the trainees and folowers
        $traineesAndFolowers = User::query()
                        ->where('id', '>', $lastTrainerId)
                        ->get();

        $traineeRole = Role::query()
                        ->where('name', 'trainee')
                        ->first();

        $folowerRole = Role::query()
                        ->where('name', 'folower')
                        ->first();

        foreach ($traineesAndFolowers as $user) {
            $roleId = '';
            if (rand(0, 1) > 0) {
                $roleId = $traineeRole->id;
            } else {
                $roleId = $folowerRole->id;
            }
            RoleUser::factory()->create([
                'user_id' => $user->id,
                'role_id' => $roleId,
            ]);
        }
    }
}
