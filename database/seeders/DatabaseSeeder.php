<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            UsersTableSeeder::class,
            CompaniesTableSeeder::class,
            EmployeesTableSeeder::class,
        ]);

        // $this->call(new UsersTableSeeder());
        // $this->call(new CompaniesTableSeeder());
        // $this->call(new EmployeesTableSeeder());

        // $this->call(UsersTableSeeder::class);
        // $this->call(CompaniesTableSeeder::class);
        // $this->call(EmployeesTableSeeder::class);

        // \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
