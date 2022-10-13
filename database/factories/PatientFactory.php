<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'reg_no' => $this->faker->text(255),
            'reg_date' => $this->faker->date,
            'age' => $this->faker->randomNumber(0),
            'gender' => \Arr::random(['male', 'female', 'other']),
            'marital_status' => $this->faker->text(255),
            'children' => $this->faker->boolean,
            'address' => $this->faker->text,
            'reason_for_visit' => $this->faker->text,
            'pmhx' => $this->faker->text,
            'pshx' => $this->faker->text,
            'pre_pap_date' => $this->faker->date,
            'pre_pap_result' => $this->faker->text,
            'pre_uss_date' => $this->faker->date,
            'pre_uss_result' => $this->faker->text,
            'pre_hpv_date' => $this->faker->date,
            'pre_hpv_result' => $this->faker->text,
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
