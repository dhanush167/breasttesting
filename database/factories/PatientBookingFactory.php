<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\PatientBooking;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientBookingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PatientBooking::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'booking_date' => $this->faker->date,
            'booking_slot' => $this->faker->text(255),
            'booked_by' => $this->faker->text(255),
            'booked_via' => $this->faker->text(255),
            'status' => $this->faker->word,
            'patient_id' => \App\Models\Patient::factory(),
            'location_id' => \App\Models\Location::factory(),
        ];
    }
}
