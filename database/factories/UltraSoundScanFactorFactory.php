<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\UltraSoundScanFactor;
use Illuminate\Database\Eloquent\Factories\Factory;

class UltraSoundScanFactorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UltraSoundScanFactor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(255),
        ];
    }
}
