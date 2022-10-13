<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\PatientInvestigation;

use App\Models\Patient;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientInvestigationTest extends TestCase
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
    public function it_gets_patient_investigations_list()
    {
        $patientInvestigations = PatientInvestigation::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.patient-investigations.index'));

        $response->assertOk()->assertSee($patientInvestigations[0]->id);
    }

    /**
     * @test
     */
    public function it_stores_the_patient_investigation()
    {
        $data = PatientInvestigation::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(
            route('api.patient-investigations.store'),
            $data
        );

        $this->assertDatabaseHas('patient_investigations', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_patient_investigation()
    {
        $patientInvestigation = PatientInvestigation::factory()->create();

        $patient = Patient::factory()->create();

        $data = [
            'pap' => $this->faker->text,
            'hpv_dna' => $this->faker->text,
            'patient_id' => $patient->id,
        ];

        $response = $this->putJson(
            route('api.patient-investigations.update', $patientInvestigation),
            $data
        );

        $data['id'] = $patientInvestigation->id;

        $this->assertDatabaseHas('patient_investigations', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_patient_investigation()
    {
        $patientInvestigation = PatientInvestigation::factory()->create();

        $response = $this->deleteJson(
            route('api.patient-investigations.destroy', $patientInvestigation)
        );

        $this->assertModelMissing($patientInvestigation);

        $response->assertNoContent();
    }
}
