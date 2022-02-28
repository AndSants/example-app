<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;
use Faker\Generator as Faker;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'email'=> $this->faker->unique()->safeEmail(),
            'telephone'=> $this->faker->numerify('###########'),
            'select_options_id' => $this->faker->numberBetween(1,4),
            'message' => $this->faker->text(),
        ];
    }
}
