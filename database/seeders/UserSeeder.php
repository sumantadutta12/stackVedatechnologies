<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        foreach (config('sample.admins') as $admin) {
            User::create([
                'name' => $admin['name'],
                'email' => $admin['email'],
                'mobile' => $admin['mobile'],
                'password' => Hash::make('123456'),
                'user_type' => config('const.user_types.admin.key'),
                'mobile_verified_at' => date('Y-m-d H:i:s'),
                'status' => 1,
                'is_active' => 1,
            ]);
        }
    }
}
