<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\House>
 */
class HouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => fake() -> unique() -> numerify('##########'),
            'address' => fake() -> address(),
            'postal_code' => fake() -> postcode(),
            'city' => fake() -> city(),
            'state' => fake() -> state(),
            'square_meters' => fake() -> numberBetween(20, 500),
            'rooms' => fake() -> numberBetween(1, 50),
            'bathrooms' => fake() -> numberBetween(1, 10),
            'type' => fake() -> randomElement([
                'condominio', 'villetta schiera', 'appartamento', 'loft',
                'monolocale'
            ]),
            'description' => fake() -> paragraphs(1, true),
            'price' => fake() -> numberBetween(5000, 10000000),
            'is_available' => fake() -> boolean()
        ];
    }
}
