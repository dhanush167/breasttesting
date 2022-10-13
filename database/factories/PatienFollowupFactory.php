<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\PatienFollowup;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatienFollowupFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PatienFollowup::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'other_comments' => $this->faker->text,
            'date' => $this->faker->date,
            'patient_id' => \App\Models\Patient::factory(),
            'followup_reason_id' => \App\Models\FollowupReason::factory(),
        ];
    }
}
