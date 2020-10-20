<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->unique(3),
            'OfficeCode_id' => $this->faker->unique(3),
            'reportsTo' => $this->faker->numberBetween(0,10),
            'lastName' => $this->faker->name,
            'firstName' => $this->faker->name,
            'extension' => $this->faker->word,
            'email' => $this->faker->email,
            'jobTitle' => $this->faker->jobTitle,

        ];
    }
}
