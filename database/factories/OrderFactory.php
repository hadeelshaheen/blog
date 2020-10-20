<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique(3),
            'customer_id' => $this->faker->unique(3),
            'orderDate' => $this->faker->dateTime,
            'requiredDate' => $this->faker->dateTime,
            'shippedDate' => $this->faker->dateTime,
            'status' => $this->faker->numberBetween(1000,10000),
            'comments' => $this->faker->word,

        ];
    }
}
