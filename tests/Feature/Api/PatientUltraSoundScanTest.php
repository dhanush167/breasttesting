<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\PatientUltraSoundScan;

use App\Models\Patient;
use App\Models\UltraSoundScanFactor;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientUltraSoundScanTest extends TestCase
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
    public function it_gets_patient_ultra_sound_scans_list()
    {
        $patientUltraSoundScans = PatientUltraSoundScan::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(
            route('api.patient-ultra-sound-scans.index')
        );

        $response->assertOk()->assertSee($patientUltraSoundScans[0]->id);
    }

    /**
     * @test
     */
    public function it_stores_the_patient_ultra_sound_scan()
    {
        $data = PatientUltraSoundScan::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(
            route('api.patient-ultra-sound-scans.store'),
            $data
        );

        $this->assertDatabaseHas('patient_ultra_sound_scans', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_patient_ultra_sound_scan()
    {
        $patientUltraSoundScan = PatientUltraSoundScan::factory()->create();

        $patient = Patient::factory()->create();
        $ultraSoundScanFactor = UltraSoundScanFactor::factory()->create();

        $data = [
            'value' => $this->faker->text,
            'patient_id' => $patient->id,
            'ultra_sound_scan_factor_id' => $ultraSoundScanFactor->id,
        ];

        $response = $this->putJson(
            route(
                'api.patient-ultra-sound-scans.update',
                $patientUltraSoundScan
            ),
            $data
        );

        $data['id'] = $patientUltraSoundScan->id;

        $this->assertDatabaseHas('patient_ultra_sound_scans', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_patient_ultra_sound_scan()
    {
        $patientUltraSoundScan = PatientUltraSoundScan::factory()->create();

        $response = $this->deleteJson(
            route(
                'api.patient-ultra-sound-scans.destroy',
                $patientUltraSoundScan
            )
        );

        $this->assertModelMissing($patientUltraSoundScan);

        $response->assertNoContent();
    }
}
