<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Patient;
use App\Models\PatientExamination;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientPatientExaminationsTest extends TestCase
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
    public function it_gets_patient_patient_examinations()
    {
        $patient = Patient::factory()->create();
        $patientExaminations = PatientExamination::factory()
            ->count(2)
            ->create([
                'patient_id' => $patient->id,
            ]);

        $response = $this->getJson(
            route('api.patients.patient-examinations.index', $patient)
        );

        $response->assertOk()->assertSee($patientExaminations[0]->id);
    }

    /**
     * @test
     */
    public function it_stores_the_patient_patient_examinations()
    {
        $patient = Patient::factory()->create();
        $data = PatientExamination::factory()
            ->make([
                'patient_id' => $patient->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.patients.patient-examinations.store', $patient),
            $data
        );

        $this->assertDatabaseHas('patient_examinations', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $patientExamination = PatientExamination::latest('id')->first();

        $this->assertEquals($patient->id, $patientExamination->patient_id);
    }
}
