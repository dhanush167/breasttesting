<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\PatientManagmentPlan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientManagmentPlanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PatientManagmentPlan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'date' => $this->faker->date,
            'checklist_id' => \App\Models\Checklist::factory(),
            'patient_id' => \App\Models\Patient::factory(),
        ];
    }
}
