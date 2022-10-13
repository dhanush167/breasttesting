<?php

namespace Database\Seeders;

use App\Models\PatientBooking;
use Illuminate\Database\Seeder;

class PatientBookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PatientBooking::factory()
            ->count(5)
            ->create();
    }
}
