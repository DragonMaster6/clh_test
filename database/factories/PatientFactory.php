<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'birthdate' => $this->faker->date(),
            'gender' => collect(['M', 'F'])->random(),
            'ssn' => $this->faker->numberBetween(100000000),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
        ];
    }
}
