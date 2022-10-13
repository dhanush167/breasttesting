<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\UltraSoundScanFactor;
use App\Models\PatientUltraSoundScan;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UltraSoundScanFactorPatientUltraSoundScansTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $user = User::factory()->create(['email' => 'admin@admin.com']);

        Sanctum::actingAs($user, [], 'web');

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_gets_ultra_sound_scan_factor_patient_ultra_sound_scans()
    {
        $ultraSoundScanFactor = UltraSoundScanFactor::factory()->create();
        $patientUltraSoundScans = PatientUltraSoundScan::factory()
            ->count(2)
            ->create([
                'ultra_sound_scan_factor_id' => $ultraSoundScanFactor->id,
            ]);

        $response = $this->getJson(
            route(
                'api.ultra-sound-scan-factors.patient-ultra-sound-scans.index',
                $ultraSoundScanFactor
            )
        );

        $response->assertOk()->assertSee($patientUltraSoundScans[0]->id);
    }

    /**
     * @test
     */
    public function it_stores_the_ultra_sound_scan_factor_patient_ultra_sound_scans()
    {
        $ultraSoundScanFactor = UltraSoundScanFactor::factory()->create();
        $data = PatientUltraSoundScan::factory()
            ->make([
                'ultra_sound_scan_factor_id' => $ultraSoundScanFactor->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route(
                'api.ultra-sound-scan-factors.patient-ultra-sound-scans.store',
                $ultraSoundScanFactor
            ),
            $data
        );

        $this->assertDatabaseHas('patient_ultra_sound_scans', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $patientUltraSoundScan = PatientUltraSoundScan::latest('id')->first();

        $this->assertEquals(
            $ultraSoundScanFactor->id,
            $patientUltraSoundScan->ultra_sound_scan_factor_id
        );
    }
}
