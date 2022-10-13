<?php

namespace Database\Seeders;

use App\Models\CommonProblem;
use Illuminate\Database\Seeder;

class CommonProblemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CommonProblem::factory()
            ->count(5)
            ->create();
    }
}
