<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstname,
            'email' => $this->faker->unique()->freeEmail,
            'email_verified_at' => now(),
            'password' => $this->faker->password, // password
            'last_online_at' => $this->faker->dateTimeThisYear($max = 'now', $timezone = null),
        ];
    }
}
