<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Adding an admin user
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'admin@admin.com',
                'password' => \Hash::make('admin'),
            ]);
        $this->call(PermissionsSeeder::class);

        $this->call(BookingSettingSeeder::class);
        $this->call(CancerTypeSeeder::class);
        $this->call(ChecklistSeeder::class);
        $this->call(CommonProblemSeeder::class);
        $this->call(ExaminationFactorSeeder::class);
        $this->call(FamilyHistorySeeder::class);
        $this->call(FollowupReasonSeeder::class);
        $this->call(LocationSeeder::class);
        $this->call(PatienFollowupSeeder::class);
        $this->call(PatientSeeder::class);
        $this->call(PatientBookingSeeder::class);
        $this->call(PatientExaminationSeeder::class);
        $this->call(PatientInvestigationSeeder::class);
        $this->call(PatientManagmentPlanSeeder::class);
        $this->call(PatientProblemSeeder::class);
        $this->call(PatientRiskFactorSeeder::class);
        $this->call(PatientUltraSoundScanSeeder::class);
        $this->call(UltraSoundScanFactorSeeder::class);
        $this->call(UserSeeder::class);
    }
}
