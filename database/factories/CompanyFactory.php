<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Company;
use App\Models\Employee;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */

class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $filepath = storage_path('images');

        return [
            'cmp_id' => Employee::all()->company_id,
            'name' => $this->faker->company,
            'email' => $this->faker->companyEmail,
            'website' => $this->faker->url,
            'logo' => $this->faker->image($filepath, 100, 100, false),
        ];
    }
}
