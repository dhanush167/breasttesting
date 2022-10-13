<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UltraSoundScanFactor;

class UltraSoundScanFactorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UltraSoundScanFactor::factory()
            ->count(5)
            ->create();
    }
}
