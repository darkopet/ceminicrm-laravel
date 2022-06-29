<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use App\Models\Company;


class CompaniesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Use Factory to seed company data
        // factory(Company::class, 5)->create();
        // factory(app\Models\Company::class, 5)->create();
        $company = Company::factory(5)->create();
    }
}   