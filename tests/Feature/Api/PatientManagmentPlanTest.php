<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\PatientManagmentPlan;

use App\Models\Patient;
use App\Models\Checklist;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientManagmentPlanTest extends TestCase
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
    public function it_gets_patient_managment_plans_list()
    {
        $patientManagmentPlans = PatientManagmentPlan::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.patient-managment-plans.index'));

        $response->assertOk()->assertSee($patientManagmentPlans[0]->date);
    }

    /**
     * @test
     */
    public function it_stores_the_patient_managment_plan()
    {
        $data = PatientManagmentPlan::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(
            route('api.patient-managment-plans.store'),
            $data
        );

        $this->assertDatabaseHas('patient_managment_plans', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
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

        $response = $this->putJson(
            route('api.patient-managment-plans.update', $patientManagmentPlan),
            $data
        );

        $data['id'] = $patientManagmentPlan->id;

        $this->assertDatabaseHas('patient_managment_plans', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_patient_managment_plan()
    {
        $patientManagmentPlan = PatientManagmentPlan::factory()->create();

        $response = $this->deleteJson(
            route('api.patient-managment-plans.destroy', $patientManagmentPlan)
        );

        $this->assertModelMissing($patientManagmentPlan);

        $response->assertNoContent();
    }
}
