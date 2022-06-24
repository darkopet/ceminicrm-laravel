<?php

namespace Database\Factories;

// use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Employee;
use App\Models\Company;
use App\Models\User;
use Psy\CodeCleaner\AssignThisVariablePass;
use Faker\Generator as Faker;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory
 *          <\App\Models\Employee>
 */

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'firstName' => $faker->firstName,
        'lastName' => $faker->lastName,
        'company_id' => $faker->numberBetween(1, 20),
        'email' => $faker->safeEmail,
        'phone' => $faker->phoneNumber,
        'user_id' => 2
    ];
});

// class EmployeeFactory extends Factory
// {
//     /**
//      * Define the model's default state.
//      *
//      * @return array<string, mixed>
//      */


//                 // public function definition()
//                 // {
//                 //     $emps = Employee::all()->pluck('id')->toArray();
//                 //     return [
//                 //         'id' => Employee::factory(),
//                 //         'firstName' => $this->faker->firstName,
//                 //         'lastName' => $this->faker->lastName,
//                 //         'company_id' => Employee::all()->random(10)->id,
//                 //         'email' => $this->faker->safeEmail,
//                 //         'phone' => $this->faker->phoneNumber,
//                 //         'remember_token' => Str::random(10),
//                 //     ];
//                 // }
    
//     /**
//      * Indicate that the model's email address should be unverified.
//      *
//      * @return static
//      */
//     public function unverified()
//     {
//         return $this->state(function (array $attributes) {
//             return [
//                 'email_verified_at' => null,
//             ];
//         });
//     }
// }

