<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Patient;
use App\Models\PatientRiskFactor;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientPatientRiskFactorsTest extends TestCase
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
    public function it_gets_patient_patient_risk_factors()
    {
        $patient = Patient::factory()->create();
        $patientRiskFactors = PatientRiskFactor::factory()
            ->count(2)
            ->create([
                'patient_id' => $patient->id,
            ]);

        $response = $this->getJson(
            route('api.patients.patient-risk-factors.index', $patient)
        );

        $response
            ->assertOk()
            ->assertSee($patientRiskFactors[0]->age_of_menarche);
    }

    /**
     * @test
     */
    public function it_stores_the_patient_patient_risk_factors()
    {
        $patient = Patient::factory()->create();
        $data = PatientRiskFactor::factory()
            ->make([
                'patient_id' => $patient->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.patients.patient-risk-factors.store', $patient),
            $data
        );

        $this->assertDatabaseHas('patient_risk_factors', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $patientRiskFactor = PatientRiskFactor::latest('id')->first();

        $this->assertEquals($patient->id, $patientRiskFactor->patient_id);
    }
}
