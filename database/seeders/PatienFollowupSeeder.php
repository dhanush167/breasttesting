<?php

namespace Database\Seeders;

use App\Models\PatienFollowup;
use Illuminate\Database\Seeder;

class PatienFollowupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PatienFollowup::factory()
            ->count(5)
            ->create();
    }
}
