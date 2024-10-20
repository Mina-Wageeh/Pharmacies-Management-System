<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medicine>
 */
class MedicineFactory extends Factory
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
                'code' => $this->faker->regexify('/[A-Z]{2}[0-9]{4}/'),
                'price' => $this->faker->numberBetween(20 , 1000),
                'quantity' => $this->faker->numberBetween(20 , 1000),
                'category_id' => $this->faker->numberBetween(1 ,4),
                'branch_id' => $this->faker->numberBetween(1 ,3),
            ];
    }
}
