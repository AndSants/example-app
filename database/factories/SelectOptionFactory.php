<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SelectOptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'      => $this->faker->randomElement(['reason_contact']),
            'option'    => $this->faker->randomElement(
                ['Dúvida', 'Elogio', 'Reclamação', 'Sugestão']
            ),
        ];
    }
}
