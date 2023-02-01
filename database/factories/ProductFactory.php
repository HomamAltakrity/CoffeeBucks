<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique()->randomDigit(),
            'name' => 'Black Coffee', 'White Coffee', 'Brown Coffee', 'Black beans', 'White beans',
            'origin' => $this->faker->city(),
            'price' => '100', '150', '50', '250', '300',
        ];
    }
}
