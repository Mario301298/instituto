<?php

namespace Database\Factories;

use App\Models\Nota;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Nota::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 20),
            'materia_id' => $this->faker->numberBetween(1, 5),
            'evaluacion' => $this->faker->numberBetween(1, 3),
            'nota' => $this->faker->numberBetween(1, 10),
        ];
    }
}
