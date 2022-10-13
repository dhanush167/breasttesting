<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\PatientExamination;

use App\Models\Patient;
use App\Models\ExaminationFactor;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientExaminationTest extends TestCase
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
    public function it_gets_patient_examinations_list()
    {
        $patientExaminations = PatientExamination::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.patient-examinations.index'));

        $response->assertOk()->assertSee($patientExaminations[0]->id);
    }

    /**
     * @test
     */
    public function it_stores_the_patient_examination()
    {
        $data = PatientExamination::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(
            route('api.patient-examinations.store'),
            $data
        );

        $this->assertDatabaseHas('patient_examinations', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
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

        $response = $this->putJson(
            route('api.patient-examinations.update', $patientExamination),
            $data
        );

        $data['id'] = $patientExamination->id;

        $this->assertDatabaseHas('patient_examinations', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_patient_examination()
    {
        $patientExamination = PatientExamination::factory()->create();

        $response = $this->deleteJson(
            route('api.patient-examinations.destroy', $patientExamination)
        );

        $this->assertModelMissing($patientExamination);

        $response->assertNoContent();
    }
}
