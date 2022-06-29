<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employee;
use Database\Factories;
use Faker\Generator as Faker;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Use Factory to seed employee data
        // factory(Employee::class, 50)->create();
        // factory(app\Models\Employee::class, 20)->create();
        // $employee = Employee::factory(20)->create();
        // \App\Models\Employee::factory()->count(20)->create();
        // \App\Models\Employee::factory()->count(2o)->create();
        // \App\Models\Employee::factory()->count(20)->create();

        Employee::factory()->count(20)->create();
    }
}
