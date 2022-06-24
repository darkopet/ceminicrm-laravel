<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Company;
use App\Models\User;
use App\Models\Employee;
use Faker\Generator as Faker;

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
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'website' => $this->faker->url(),
            'logo' => $this->faker->image(),
            'remember_token' => Str::random(10)
        ];
    }
    
    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}

        // /*
        // |--------------------------------------------------------------------------
        // | Company Factory
        // |--------------------------------------------------------------------------
        // | This function uses Faker to generate random Company data to
        // | seed the database.
        // */

        // $factory->define(Company::class, function (Faker $faker) {

        //     $filepath = storage_path('images');

        //     // if (!File::exists($filepath)) {
        //     //     File::makeDirectory($filepath);
        //     // }

        //     return [
        //         'name' => $faker->company,
        //         'email' => $faker->companyEmail,
        //         'website' => $faker->url,
        //         'logo' => $faker->image($filepath, 100, 100, null, false),
        //         'user_id' => 1

        //     ];
        // });