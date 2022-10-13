<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Checklist;
use App\Models\PatientManagmentPlan;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ChecklistPatientManagmentPlansTest extends TestCase
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
    public function it_gets_checklist_patient_managment_plans()
    {
        $checklist = Checklist::factory()->create();
        $patientManagmentPlans = PatientManagmentPlan::factory()
            ->count(2)
            ->create([
                'checklist_id' => $checklist->id,
            ]);

        $response = $this->getJson(
            route('api.checklists.patient-managment-plans.index', $checklist)
        );

        $response->assertOk()->assertSee($patientManagmentPlans[0]->date);
    }

    /**
     * @test
     */
    public function it_stores_the_checklist_patient_managment_plans()
    {
        $checklist = Checklist::factory()->create();
        $data = PatientManagmentPlan::factory()
            ->make([
                'checklist_id' => $checklist->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.checklists.patient-managment-plans.store', $checklist),
            $data
        );

        $this->assertDatabaseHas('patient_managment_plans', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $patientManagmentPlan = PatientManagmentPlan::latest('id')->first();

        $this->assertEquals(
            $checklist->id,
            $patientManagmentPlan->checklist_id
        );
    }
}
