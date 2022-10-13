<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PatientUltraSoundScan;

class PatientUltraSoundScanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PatientUltraSoundScan::factory()
            ->count(5)
            ->create();
    }
}
