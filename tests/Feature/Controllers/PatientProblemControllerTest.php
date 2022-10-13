<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\PatientProblem;

use App\Models\Patient;
use App\Models\CommonProblem;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientProblemControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(
            User::factory()->create(['email' => 'admin@admin.com'])
        );

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_displays_index_view_with_patient_problems()
    {
        $patientProblems = PatientProblem::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('patient-problems.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.patient_problems.index')
            ->assertViewHas('patientProblems');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_patient_problem()
    {
        $response = $this->get(route('patient-problems.create'));

        $response->assertOk()->assertViewIs('app.patient_problems.create');
    }

    /**
     * @test
     */
    public function it_stores_the_patient_problem()
    {
        $data = PatientProblem::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('patient-problems.store'), $data);

        $this->assertDatabaseHas('patient_problems', $data);

        $patientProblem = PatientProblem::latest('id')->first();

        $response->assertRedirect(
            route('patient-problems.edit', $patientProblem)
        );
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_patient_problem()
    {
        $patientProblem = PatientProblem::factory()->create();

        $response = $this->get(route('patient-problems.show', $patientProblem));

        $response
            ->assertOk()
            ->assertViewIs('app.patient_problems.show')
            ->assertViewHas('patientProblem');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_patient_problem()
    {
        $patientProblem = PatientProblem::factory()->create();

        $response = $this->get(route('patient-problems.edit', $patientProblem));

        $response
            ->assertOk()
            ->assertViewIs('app.patient_problems.edit')
            ->assertViewHas('patientProblem');
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

        $response = $this->put(
            route('patient-problems.update', $patientProblem),
            $data
        );

        $data['id'] = $patientProblem->id;

        $this->assertDatabaseHas('patient_problems', $data);

        $response->assertRedirect(
            route('patient-problems.edit', $patientProblem)
        );
    }

    /**
     * @test
     */
    public function it_deletes_the_patient_problem()
    {
        $patientProblem = PatientProblem::factory()->create();

        $response = $this->delete(
            route('patient-problems.destroy', $patientProblem)
        );

        $response->assertRedirect(route('patient-problems.index'));

        $this->assertModelMissing($patientProblem);
    }
}
