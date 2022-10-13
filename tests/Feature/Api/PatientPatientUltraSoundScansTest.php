<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Patient;
use App\Models\PatientUltraSoundScan;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientPatientUltraSoundScansTest extends TestCase
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
    public function it_gets_patient_patient_ultra_sound_scans()
    {
        $patient = Patient::factory()->create();
        $patientUltraSoundScans = PatientUltraSoundScan::factory()
            ->count(2)
            ->create([
                'patient_id' => $patient->id,
            ]);

        $response = $this->getJson(
            route('api.patients.patient-ultra-sound-scans.index', $patient)
        );

        $response->assertOk()->assertSee($patientUltraSoundScans[0]->id);
    }

    /**
     * @test
     */
    public function it_stores_the_patient_patient_ultra_sound_scans()
    {
        $patient = Patient::factory()->create();
        $data = PatientUltraSoundScan::factory()
            ->make([
                'patient_id' => $patient->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.patients.patient-ultra-sound-scans.store', $patient),
            $data
        );

        $this->assertDatabaseHas('patient_ultra_sound_scans', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $patientUltraSoundScan = PatientUltraSoundScan::latest('id')->first();

        $this->assertEquals($patient->id, $patientUltraSoundScan->patient_id);
    }
}
