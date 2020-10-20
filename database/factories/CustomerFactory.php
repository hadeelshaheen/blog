<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique(3),
            'salesRepEmployeeNum' => $this->faker->unique(3),
            'name' => $this->faker->name,
            'lastName' => $this->faker->name,
            'firstName' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
            'address1' => $this->faker->address,
            'address2' => $this->faker->address,
            'city' => $this->faker->city,
            'state' => $this->faker->word,
            'postalCode' => $this->faker->numberBetween(1000,10000),
            'country' => $this->faker->country,
        ];
    }
}
