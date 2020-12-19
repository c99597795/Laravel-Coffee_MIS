<?php

namespace Database\Factories;

use App\Models\Member;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;

class MemberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Member::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $sex=['Man','Woman'];
        return [
            //
            'name'=>$this->faker->name,
            'birth'=>$this->faker->date($format = 'Y-m-d', $max = '2012-12-31'),
            'email' =>$this->faker->unique()->freeEmail,
            'sex'=>$sex[array_rand($sex)],
            'phone'=>$this->faker->PhoneNumber,
            'times'=>rand(1,10),
            'last_bought'=>$this->faker->dateTimeThisYear($max = 'now', $timezone = null)  

        ];
    }
}
