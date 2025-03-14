<?php

namespace Database\Factories;

use App\Models\produit;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class produitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=>fake()->name(),
            "description"=>fake()->text(100),
            "price"=>fake()->numberBetween(1,100),
        ];
    }
}
