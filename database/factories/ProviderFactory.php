<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProviderFactory extends Factory
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
            'site'=> $this->faker->companyEmail(),
            'fu' => $this->faker->randomElement(['PE', 'PB', 'AL', 'CE', 'PI','MA','BA','RN','SE']),
        ];
    }
}
