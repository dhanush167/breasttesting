<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\PatientProblem;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientProblemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PatientProblem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'common_problem_id' => \App\Models\CommonProblem::factory(),
            'patient_id' => \App\Models\Patient::factory(),
        ];
    }
}
