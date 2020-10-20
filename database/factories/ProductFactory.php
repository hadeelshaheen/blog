<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique(3),
            'productline_id' => $this->faker->unique(3),
            'name' => $this->faker->name,
            'scale' => $this->faker->numberBetween(0,100),
            'vendor' => $this->faker->word,
            'PdtDescription' => $this->faker->word,
            'QtyInStock' => $this->faker->numberBetween(0,100),
            'MSRP' => $this->faker->word,
        ];
    }
}
