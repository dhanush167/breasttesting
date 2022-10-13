<?php

namespace Database\Seeders;

use App\Models\BookingSetting;
use Illuminate\Database\Seeder;

class BookingSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookingSetting::factory()
            ->count(5)
            ->create();
    }
}
