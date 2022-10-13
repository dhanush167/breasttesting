<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\BookingSetting;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingSettingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BookingSetting::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'year' => $this->faker->year,
            'weekly_working_days' => $this->faker->text,
            'holidays' => $this->faker->text,
            'day_start_time' => $this->faker->time,
            'day_end_time' => $this->faker->time,
            'slot_duration' => $this->faker->randomNumber(0),
            'status' => $this->faker->boolean,
            'location_id' => \App\Models\Location::factory(),
        ];
    }
}
