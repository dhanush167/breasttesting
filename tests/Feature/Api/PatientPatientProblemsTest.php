<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Patient;
use App\Models\PatientProblem;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientPatientProblemsTest extends TestCase
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
    public function it_gets_patient_patient_problems()
    {
        $patient = Patient::factory()->create();
        $patientProblems = PatientProblem::factory()
            ->count(2)
            ->create([
                'patient_id' => $patient->id,
            ]);

        $response = $this->getJson(
            route('api.patients.patient-problems.index', $patient)
        );

        $response->assertOk()->assertSee($patientProblems[0]->id);
    }

    /**
     * @test
     */
    public function it_stores_the_patient_patient_problems()
    {
        $patient = Patient::factory()->create();
        $data = PatientProblem::factory()
            ->make([
                'patient_id' => $patient->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.patients.patient-problems.store', $patient),
            $data
        );

        $this->assertDatabaseHas('patient_problems', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $patientProblem = PatientProblem::latest('id')->first();

        $this->assertEquals($patient->id, $patientProblem->patient_id);
    }
}
