<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Patient;
use App\Models\PatientInvestigation;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientPatientInvestigationsTest extends TestCase
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
    public function it_gets_patient_patient_investigations()
    {
        $patient = Patient::factory()->create();
        $patientInvestigations = PatientInvestigation::factory()
            ->count(2)
            ->create([
                'patient_id' => $patient->id,
            ]);

        $response = $this->getJson(
            route('api.patients.patient-investigations.index', $patient)
        );

        $response->assertOk()->assertSee($patientInvestigations[0]->id);
    }

    /**
     * @test
     */
    public function it_stores_the_patient_patient_investigations()
    {
        $patient = Patient::factory()->create();
        $data = PatientInvestigation::factory()
            ->make([
                'patient_id' => $patient->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.patients.patient-investigations.store', $patient),
            $data
        );

        $this->assertDatabaseHas('patient_investigations', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $patientInvestigation = PatientInvestigation::latest('id')->first();

        $this->assertEquals($patient->id, $patientInvestigation->patient_id);
    }
}
