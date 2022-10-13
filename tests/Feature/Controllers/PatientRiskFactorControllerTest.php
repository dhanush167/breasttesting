<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\PatientRiskFactor;

use App\Models\Patient;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientRiskFactorControllerTest extends TestCase
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
    public function it_displays_index_view_with_patient_risk_factors()
    {
        $patientRiskFactors = PatientRiskFactor::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('patient-risk-factors.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.patient_risk_factors.index')
            ->assertViewHas('patientRiskFactors');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_patient_risk_factor()
    {
        $response = $this->get(route('patient-risk-factors.create'));

        $response->assertOk()->assertViewIs('app.patient_risk_factors.create');
    }

    /**
     * @test
     */
    public function it_stores_the_patient_risk_factor()
    {
        $data = PatientRiskFactor::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('patient-risk-factors.store'), $data);

        $this->assertDatabaseHas('patient_risk_factors', $data);

        $patientRiskFactor = PatientRiskFactor::latest('id')->first();

        $response->assertRedirect(
            route('patient-risk-factors.edit', $patientRiskFactor)
        );
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_patient_risk_factor()
    {
        $patientRiskFactor = PatientRiskFactor::factory()->create();

        $response = $this->get(
            route('patient-risk-factors.show', $patientRiskFactor)
        );

        $response
            ->assertOk()
            ->assertViewIs('app.patient_risk_factors.show')
            ->assertViewHas('patientRiskFactor');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_patient_risk_factor()
    {
        $patientRiskFactor = PatientRiskFactor::factory()->create();

        $response = $this->get(
            route('patient-risk-factors.edit', $patientRiskFactor)
        );

        $response
            ->assertOk()
            ->assertViewIs('app.patient_risk_factors.edit')
            ->assertViewHas('patientRiskFactor');
    }

    /**
     * @test
     */
    public function it_updates_the_patient_risk_factor()
    {
        $patientRiskFactor = PatientRiskFactor::factory()->create();

        $patient = Patient::factory()->create();

        $data = [
            'age_of_menarche' => $this->faker->text(255),
            'lrmp' => $this->faker->text(255),
            'ocp' => $this->faker->text(255),
            'hrt' => $this->faker->text(255),
            'age_of_menopause' => $this->faker->text(255),
            'post_menopausal_bleeding' => $this->faker->text(255),
            'betel_chewing' => $this->faker->text(255),
            'areca_nut' => $this->faker->text(255),
            'smoking' => $this->faker->text(255),
            'alcohol' => $this->faker->text(255),
            'other_risk_factor' => $this->faker->text,
            'sexual_hx' => $this->faker->text(255),
            'occupation_radiation' => $this->faker->boolean,
            'patient_id' => $patient->id,
        ];

        $response = $this->put(
            route('patient-risk-factors.update', $patientRiskFactor),
            $data
        );

        $data['id'] = $patientRiskFactor->id;

        $this->assertDatabaseHas('patient_risk_factors', $data);

        $response->assertRedirect(
            route('patient-risk-factors.edit', $patientRiskFactor)
        );
    }

    /**
     * @test
     */
    public function it_deletes_the_patient_risk_factor()
    {
        $patientRiskFactor = PatientRiskFactor::factory()->create();

        $response = $this->delete(
            route('patient-risk-factors.destroy', $patientRiskFactor)
        );

        $response->assertRedirect(route('patient-risk-factors.index'));

        $this->assertModelMissing($patientRiskFactor);
    }
}
