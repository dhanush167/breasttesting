<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\PatientUltraSoundScan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientUltraSoundScanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PatientUltraSoundScan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'value' => $this->faker->text,
            'patient_id' => \App\Models\Patient::factory(),
            'ultra_sound_scan_factor_id' => \App\Models\UltraSoundScanFactor::factory(),
        ];
    }
}
