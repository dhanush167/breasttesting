<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\PatientProblem;

use App\Models\Patient;
use App\Models\CommonProblem;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientProblemTest extends TestCase
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
    public function it_gets_patient_problems_list()
    {
        $patientProblems = PatientProblem::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.patient-problems.index'));

        $response->assertOk()->assertSee($patientProblems[0]->id);
    }

    /**
     * @test
     */
    public function it_stores_the_patient_problem()
    {
        $data = PatientProblem::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.patient-problems.store'), $data);

        $this->assertDatabaseHas('patient_problems', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_patient_problem()
    {
        $patientProblem = PatientProblem::factory()->create();

        $commonProblem = CommonProblem::factory()->create();
        $patient = Patient::factory()->create();

        $data = [
            'common_problem_id' => $commonProblem->id,
            'patient_id' => $patient->id,
        ];

        $response = $this->putJson(
            route('api.patient-problems.update', $patientProblem),
            $data
        );

        $data['id'] = $patientProblem->id;

        $this->assertDatabaseHas('patient_problems', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_patient_problem()
    {
        $patientProblem = PatientProblem::factory()->create();

        $response = $this->deleteJson(
            route('api.patient-problems.destroy', $patientProblem)
        );

        $this->assertModelMissing($patientProblem);

        $response->assertNoContent();
    }
}
