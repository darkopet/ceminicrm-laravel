<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use App\Models\Employee;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => Employee::factory(),
            'firstName' => $this->faker->firstName,
            'lastName' => $this->faker->lastName,
            'company_id' => Employee::factory(),
            'email' => $this->faker->safeEmail,
            'phone' => $this->faker->phoneNumber
        ];
    }
}
