<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code' => rand(1111,9999),
            'cost' => rand(1111,9999),
            'price' => rand(1111,9999),
            'category_id' => \App\Models\Category::factory(),
            'name' => $this->faker->colorName . ' ' .$this->faker->name,
            'description' => $this->faker->sentence
        ];
    }
}
