<?php

namespace Database\Seeders;

use App\Models\CancerType;
use Illuminate\Database\Seeder;

class CancerTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CancerType::factory()
            ->count(5)
            ->create();
    }
}
