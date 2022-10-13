<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\PatientRiskFactor;

use App\Models\Patient;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientRiskFactorTest extends TestCase
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
    public function it_gets_patient_risk_factors_list()
    {
        $patientRiskFactors = PatientRiskFactor::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.patient-risk-factors.index'));

        $response
            ->assertOk()
            ->assertSee($patientRiskFactors[0]->age_of_menarche);
    }

    /**
     * @test
     */
    public function it_stores_the_patient_risk_factor()
    {
        $data = PatientRiskFactor::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(
            route('api.patient-risk-factors.store'),
            $data
        );

        $this->assertDatabaseHas('patient_risk_factors', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
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

        $response = $this->putJson(
            route('api.patient-risk-factors.update', $patientRiskFactor),
            $data
        );

        $data['id'] = $patientRiskFactor->id;

        $this->assertDatabaseHas('patient_risk_factors', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_patient_risk_factor()
    {
        $patientRiskFactor = PatientRiskFactor::factory()->create();

        $response = $this->deleteJson(
            route('api.patient-risk-factors.destroy', $patientRiskFactor)
        );

        $this->assertModelMissing($patientRiskFactor);

        $response->assertNoContent();
    }
}
