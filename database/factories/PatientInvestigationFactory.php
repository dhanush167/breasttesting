<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\PatientInvestigation;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientInvestigationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PatientInvestigation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pap' => $this->faker->text,
            'hpv_dna' => $this->faker->text,
            'patient_id' => \App\Models\Patient::factory(),
        ];
    }
}
