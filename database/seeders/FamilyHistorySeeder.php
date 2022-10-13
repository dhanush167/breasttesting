<?php

namespace Database\Seeders;

use App\Models\FamilyHistory;
use Illuminate\Database\Seeder;

class FamilyHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FamilyHistory::factory()
            ->count(5)
            ->create();
    }
}
