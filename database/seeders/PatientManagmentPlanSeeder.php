<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PatientManagmentPlan;

class PatientManagmentPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PatientManagmentPlan::factory()
            ->count(5)
            ->create();
    }
}
