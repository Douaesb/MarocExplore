<?php

namespace Database\Factories;

use App\Models\Itineraire;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItineraireFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Itineraire::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titre' => $this->faker->sentence,
            'categorie' => $this->faker->word,
            'image' => $this->faker->word,
            'debut' => $this->faker->word,
            'fin' => $this->faker->word,
            'duree' => $this->faker->randomNumber(2) . ' days',
            'user_id' => function () {
                return \App\Models\User::factory()->create()->id;
            },
        ];
    }
}
