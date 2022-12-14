<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PatientExamination;

class PatientExaminationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PatientExamination::factory()
            ->count(5)
            ->create();
    }
}
