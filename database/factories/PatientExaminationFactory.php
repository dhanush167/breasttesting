<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\PatientExamination;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientExaminationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PatientExamination::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'value' => $this->faker->text,
            'examination_factor_id' => \App\Models\ExaminationFactor::factory(),
            'patient_id' => \App\Models\Patient::factory(),
        ];
    }
}
