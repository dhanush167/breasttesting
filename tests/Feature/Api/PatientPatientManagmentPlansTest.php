<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Patient;
use App\Models\PatientManagmentPlan;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientPatientManagmentPlansTest extends TestCase
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
    public function it_gets_patient_patient_managment_plans()
    {
        $patient = Patient::factory()->create();
        $patientManagmentPlans = PatientManagmentPlan::factory()
            ->count(2)
            ->create([
                'patient_id' => $patient->id,
            ]);

        $response = $this->getJson(
            route('api.patients.patient-managment-plans.index', $patient)
        );

        $response->assertOk()->assertSee($patientManagmentPlans[0]->date);
    }

    /**
     * @test
     */
    public function it_stores_the_patient_patient_managment_plans()
    {
        $patient = Patient::factory()->create();
        $data = PatientManagmentPlan::factory()
            ->make([
                'patient_id' => $patient->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.patients.patient-managment-plans.store', $patient),
            $data
        );

        $this->assertDatabaseHas('patient_managment_plans', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $patientManagmentPlan = PatientManagmentPlan::latest('id')->first();

        $this->assertEquals($patient->id, $patientManagmentPlan->patient_id);
    }
}
