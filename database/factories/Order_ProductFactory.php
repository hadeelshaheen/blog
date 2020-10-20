<?php

namespace Database\Factories;

use App\Models\Order_Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class Order_ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order_Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique(3),
            'order_id' => $this->faker->unique(3),
            'productCode' => $this->faker->unique(3),
            'Qty' => $this->faker->numberBetween(100,1000),

        ];
    }
}
