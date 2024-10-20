<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Psy\Util\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return
        [
          'name' => $this->faker->word(),
          'national_id' => $this->faker->numberBetween(11111111111111 , 99999999999999),
          'age' => $this->faker->numberBetween(20 , 70),
          'phone' => $this->faker->randomNumber(9 , true),
          'address' => $this->faker->country(),
          'branch_id' => $this->faker->numberBetween(1 ,3),

        ];
    }
}
