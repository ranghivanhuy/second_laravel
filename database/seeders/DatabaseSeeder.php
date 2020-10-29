<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            [
                'name' => 'Nguyễn Văn A',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Nguyễn Văn B',
                'email' => 'nguyenvanb@gmail.com',
                'password' => Hash::make('password'),
            ]
        ]);

        DB::table('roles')->insert([
            [
                'name' => 'admin',
                'description' => 'Admin role',
            ],
            [
                'name' => 'user',
                'description' => 'User role',
            ]
        ]);

        DB::table('user_roles')->insert([
            [
                'user_id' => 1,
                'role_id' => 1
            ], 
            [
                'user_id' => 1,
                'role_id' => 2
            ],
            [
                'user_id' => 2,
                'role_id' => 2
            ]
        ]);
    }
}
