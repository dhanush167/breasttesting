<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\CommonProblem;
use App\Models\PatientProblem;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommonProblemPatientProblemsTest extends TestCase
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
    public function it_gets_common_problem_patient_problems()
    {
        $commonProblem = CommonProblem::factory()->create();
        $patientProblems = PatientProblem::factory()
            ->count(2)
            ->create([
                'common_problem_id' => $commonProblem->id,
            ]);

        $response = $this->getJson(
            route('api.common-problems.patient-problems.index', $commonProblem)
        );

        $response->assertOk()->assertSee($patientProblems[0]->id);
    }

    /**
     * @test
     */
    public function it_stores_the_common_problem_patient_problems()
    {
        $commonProblem = CommonProblem::factory()->create();
        $data = PatientProblem::factory()
            ->make([
                'common_problem_id' => $commonProblem->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.common-problems.patient-problems.store', $commonProblem),
            $data
        );

        $this->assertDatabaseHas('patient_problems', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $patientProblem = PatientProblem::latest('id')->first();

        $this->assertEquals(
            $commonProblem->id,
            $patientProblem->common_problem_id
        );
    }
}
