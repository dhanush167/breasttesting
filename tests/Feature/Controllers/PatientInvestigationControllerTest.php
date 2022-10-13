<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\PatientInvestigation;

use App\Models\Patient;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientInvestigationControllerTest extends TestCase
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
    public function it_displays_index_view_with_patient_investigations()
    {
        $patientInvestigations = PatientInvestigation::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('patient-investigations.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.patient_investigations.index')
            ->assertViewHas('patientInvestigations');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_patient_investigation()
    {
        $response = $this->get(route('patient-investigations.create'));

        $response
            ->assertOk()
            ->assertViewIs('app.patient_investigations.create');
    }

    /**
     * @test
     */
    public function it_stores_the_patient_investigation()
    {
        $data = PatientInvestigation::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('patient-investigations.store'), $data);

        $this->assertDatabaseHas('patient_investigations', $data);

        $patientInvestigation = PatientInvestigation::latest('id')->first();

        $response->assertRedirect(
            route('patient-investigations.edit', $patientInvestigation)
        );
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_patient_investigation()
    {
        $patientInvestigation = PatientInvestigation::factory()->create();

        $response = $this->get(
            route('patient-investigations.show', $patientInvestigation)
        );

        $response
            ->assertOk()
            ->assertViewIs('app.patient_investigations.show')
            ->assertViewHas('patientInvestigation');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_patient_investigation()
    {
        $patientInvestigation = PatientInvestigation::factory()->create();

        $response = $this->get(
            route('patient-investigations.edit', $patientInvestigation)
        );

        $response
            ->assertOk()
            ->assertViewIs('app.patient_investigations.edit')
            ->assertViewHas('patientInvestigation');
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

        $response = $this->put(
            route('patient-investigations.update', $patientInvestigation),
            $data
        );

        $data['id'] = $patientInvestigation->id;

        $this->assertDatabaseHas('patient_investigations', $data);

        $response->assertRedirect(
            route('patient-investigations.edit', $patientInvestigation)
        );
    }

    /**
     * @test
     */
    public function it_deletes_the_patient_investigation()
    {
        $patientInvestigation = PatientInvestigation::factory()->create();

        $response = $this->delete(
            route('patient-investigations.destroy', $patientInvestigation)
        );

        $response->assertRedirect(route('patient-investigations.index'));

        $this->assertModelMissing($patientInvestigation);
    }
}
