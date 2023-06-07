<?php

namespace Database\Factories;

use App\Models\Patient;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();

        return [
            'name' => $faker->name(),
            'address' => $faker->address(),
            'phone' => $faker->phoneNumber(),
            'hospital_id' => mt_rand(1, 3),
        ];
    }
}
