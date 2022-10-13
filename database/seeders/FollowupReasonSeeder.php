<?php

namespace Database\Seeders;

use App\Models\FollowupReason;
use Illuminate\Database\Seeder;

class FollowupReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FollowupReason::factory()
            ->count(5)
            ->create();
    }
}
