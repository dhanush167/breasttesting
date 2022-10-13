<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\CommonProblem;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommonProblemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CommonProblem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'short_code' => $this->faker->text(255),
            'problem' => $this->faker->text,
        ];
    }
}
