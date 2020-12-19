<?php

namespace Database\Factories;

use App\Models\revenues;
use Illuminate\Database\Eloquent\Factories\Factory;

class RevenuesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = revenues::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'date'=>$this->faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now', $timezone = null)->format($format = 'Y-m-d'),
            'revenue'=>$this->faker->numberBetween($min=30000,$max=50000),
        ];
    }
}
