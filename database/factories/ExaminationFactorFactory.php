<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\ExaminationFactor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExaminationFactorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ExaminationFactor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'type' => $this->faker->word,
        ];
    }
}
