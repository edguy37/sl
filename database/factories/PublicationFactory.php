<?php

namespace Database\Factories;

use App\Models\Publication;
use Illuminate\Database\Eloquent\Factories\Factory;

class PublicationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Publication::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'description' => $this->faker->text(),
            'phone' => $this->faker->phoneNumber(),
            'whats' => $this->faker->phoneNumber(),
            'price' => $this->faker->randomNumber(3,true),
            'link' => $this->faker->url(),
            'active' => rand(0,1),
            'user_id' => rand(1,4)
        ];
    }
}
