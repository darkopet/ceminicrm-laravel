<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $user = User::factory(10)->create();
        // $user = User::factory(5)->create();
        // $user = User::factory(5)->create();
        // $user = User::factory(5)->create();
        // \App\Models\User::factory()->count(5)->create();
        // \App\Models\User::factory()->count(5)->create();
        // \App\Models\User::factory()->count(5)->create();
        // \App\Models\User::factory()->count(5)->create();
        // \App\Models\User::factory()->count(3)->create();

        User::factory()->count(1)->create([
            'email' => 'admin@admin.com',
            'password' => 'password'
        ]);        

        // DB::table('users')->insert([
        //     'name' => 'Admin',
        //     'email' => 'admin@admin.com',
        //     'password' => bcrypt('password'),
        // ]);

        // Create an Admin User Account
        // $admin = table('users')->insert([
        //     'name' => 'Admin',
        //     'email' => 'admin@admin.com',
        //     'password' => 'password'
        // ]);
    }
}
