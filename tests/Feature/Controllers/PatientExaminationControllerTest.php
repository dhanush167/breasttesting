<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\PatientExamination;

use App\Models\Patient;
use App\Models\ExaminationFactor;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientExaminationControllerTest extends TestCase
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
    public function it_displays_index_view_with_patient_examinations()
    {
        $patientExaminations = PatientExamination::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('patient-examinations.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.patient_examinations.index')
            ->assertViewHas('patientExaminations');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_patient_examination()
    {
        $response = $this->get(route('patient-examinations.create'));

        $response->assertOk()->assertViewIs('app.patient_examinations.create');
    }

    /**
     * @test
     */
    public function it_stores_the_patient_examination()
    {
        $data = PatientExamination::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('patient-examinations.store'), $data);

        $this->assertDatabaseHas('patient_examinations', $data);

        $patientExamination = PatientExamination::latest('id')->first();

        $response->assertRedirect(
            route('patient-examinations.edit', $patientExamination)
        );
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_patient_examination()
    {
        $patientExamination = PatientExamination::factory()->create();

        $response = $this->get(
            route('patient-examinations.show', $patientExamination)
        );

        $response
            ->assertOk()
            ->assertViewIs('app.patient_examinations.show')
            ->assertViewHas('patientExamination');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_patient_examination()
    {
        $patientExamination = PatientExamination::factory()->create();

        $response = $this->get(
            route('patient-examinations.edit', $patientExamination)
        );

        $response
            ->assertOk()
            ->assertViewIs('app.patient_examinations.edit')
            ->assertViewHas('patientExamination');
    }

    /**
     * @test
     */
    public function it_updates_the_patient_examination()
    {
        $patientExamination = PatientExamination::factory()->create();

        $examinationFactor = ExaminationFactor::factory()->create();
        $patient = Patient::factory()->create();

        $data = [
            'value' => $this->faker->text,
            'examination_factor_id' => $examinationFactor->id,
            'patient_id' => $patient->id,
        ];

        $response = $this->put(
            route('patient-examinations.update', $patientExamination),
            $data
        );

        $data['id'] = $patientExamination->id;

        $this->assertDatabaseHas('patient_examinations', $data);

        $response->assertRedirect(
            route('patient-examinations.edit', $patientExamination)
        );
    }

    /**
     * @test
     */
    public function it_deletes_the_patient_examination()
    {
        $patientExamination = PatientExamination::factory()->create();

        $response = $this->delete(
            route('patient-examinations.destroy', $patientExamination)
        );

        $response->assertRedirect(route('patient-examinations.index'));

        $this->assertModelMissing($patientExamination);
    }
}
