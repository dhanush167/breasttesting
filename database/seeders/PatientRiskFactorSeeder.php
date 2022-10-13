<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PatientRiskFactor;

class PatientRiskFactorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PatientRiskFactor::factory()
            ->count(5)
            ->create();
    }
}
