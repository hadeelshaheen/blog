<?php

namespace Database\Factories;

use App\Models\ProductLine;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductLineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Productline::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return array(
            'id' => $this->faker->unique(3),
             'DescInText' => $this->faker->word,
             'DescInHTML' => $this->faker->word,
             'image' => $this->faker->image(null),

        );
    }


}
