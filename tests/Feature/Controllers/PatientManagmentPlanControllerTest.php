<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\PatientManagmentPlan;

use App\Models\Patient;
use App\Models\Checklist;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientManagmentPlanControllerTest extends TestCase
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
    public function it_displays_index_view_with_patient_managment_plans()
    {
        $patientManagmentPlans = PatientManagmentPlan::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('patient-managment-plans.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.patient_managment_plans.index')
            ->assertViewHas('patientManagmentPlans');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_patient_managment_plan()
    {
        $response = $this->get(route('patient-managment-plans.create'));

        $response
            ->assertOk()
            ->assertViewIs('app.patient_managment_plans.create');
    }

    /**
     * @test
     */
    public function it_stores_the_patient_managment_plan()
    {
        $data = PatientManagmentPlan::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('patient-managment-plans.store'), $data);

        $this->assertDatabaseHas('patient_managment_plans', $data);

        $patientManagmentPlan = PatientManagmentPlan::latest('id')->first();

        $response->assertRedirect(
            route('patient-managment-plans.edit', $patientManagmentPlan)
        );
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_patient_managment_plan()
    {
        $patientManagmentPlan = PatientManagmentPlan::factory()->create();

        $response = $this->get(
            route('patient-managment-plans.show', $patientManagmentPlan)
        );

        $response
            ->assertOk()
            ->assertViewIs('app.patient_managment_plans.show')
            ->assertViewHas('patientManagmentPlan');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_patient_managment_plan()
    {
        $patientManagmentPlan = PatientManagmentPlan::factory()->create();

        $response = $this->get(
            route('patient-managment-plans.edit', $patientManagmentPlan)
        );

        $response
            ->assertOk()
            ->assertViewIs('app.patient_managment_plans.edit')
            ->assertViewHas('patientManagmentPlan');
    }

    /**
     * @test
     */
    public function it_updates_the_patient_managment_plan()
    {
        $patientManagmentPlan = PatientManagmentPlan::factory()->create();

        $checklist = Checklist::factory()->create();
        $patient = Patient::factory()->create();

        $data = [
            'date' => $this->faker->date,
            'checklist_id' => $checklist->id,
            'patient_id' => $patient->id,
        ];

        $response = $this->put(
            route('patient-managment-plans.update', $patientManagmentPlan),
            $data
        );

        $data['id'] = $patientManagmentPlan->id;

        $this->assertDatabaseHas('patient_managment_plans', $data);

        $response->assertRedirect(
            route('patient-managment-plans.edit', $patientManagmentPlan)
        );
    }

    /**
     * @test
     */
    public function it_deletes_the_patient_managment_plan()
    {
        $patientManagmentPlan = PatientManagmentPlan::factory()->create();

        $response = $this->delete(
            route('patient-managment-plans.destroy', $patientManagmentPlan)
        );

        $response->assertRedirect(route('patient-managment-plans.index'));

        $this->assertModelMissing($patientManagmentPlan);
    }
}
