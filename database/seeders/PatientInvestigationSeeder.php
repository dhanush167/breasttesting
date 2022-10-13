<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PatientInvestigation;

class PatientInvestigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PatientInvestigation::factory()
            ->count(5)
            ->create();
    }
}
