<?php

namespace Database\Seeders;

use App\Models\PatientProblem;
use Illuminate\Database\Seeder;

class PatientProblemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PatientProblem::factory()
            ->count(5)
            ->create();
    }
}
