<?php

namespace Database\Factories;

use App\Models\Office;
use Illuminate\Database\Eloquent\Factories\Factory;

class OfficeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Office::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique(3),
            'city' => $this->faker->city,
            'phone' => $this->faker->phoneNumber,
            'address1' => $this->faker->address,
            'address2' => $this->faker->address,
            'state' => $this->faker->word,
            'country' => $this->faker->country,
            'PastalCode' => $this->faker->numberBetween(1000,10000),
            'name' => $this->faker->name,
        ];
    }
}
