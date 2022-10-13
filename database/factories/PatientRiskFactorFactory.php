<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\PatientRiskFactor;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientRiskFactorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PatientRiskFactor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'age_of_menarche' => $this->faker->text(255),
            'lrmp' => $this->faker->text(255),
            'ocp' => $this->faker->text(255),
            'hrt' => $this->faker->text(255),
            'age_of_menopause' => $this->faker->text(255),
            'post_menopausal_bleeding' => $this->faker->text(255),
            'betel_chewing' => $this->faker->text(255),
            'areca_nut' => $this->faker->text(255),
            'smoking' => $this->faker->text(255),
            'alcohol' => $this->faker->text(255),
            'other_risk_factor' => $this->faker->text,
            'sexual_hx' => $this->faker->text(255),
            'occupation_radiation' => $this->faker->boolean,
            'patient_id' => \App\Models\Patient::factory(),
        ];
    }
}
