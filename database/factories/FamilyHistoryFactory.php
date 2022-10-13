<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\FamilyHistory;
use Illuminate\Database\Eloquent\Factories\Factory;

class FamilyHistoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FamilyHistory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'degree' => $this->faker->text(255),
            'number_of_relative' => $this->faker->randomNumber(0),
            'cancer_type_id' => \App\Models\CancerType::factory(),
            'patient_id' => \App\Models\Patient::factory(),
        ];
    }
}
