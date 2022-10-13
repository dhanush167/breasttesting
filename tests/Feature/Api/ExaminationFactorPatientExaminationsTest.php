<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\ExaminationFactor;
use App\Models\PatientExamination;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExaminationFactorPatientExaminationsTest extends TestCase
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
    public function it_gets_examination_factor_patient_examinations()
    {
        $examinationFactor = ExaminationFactor::factory()->create();
        $patientExaminations = PatientExamination::factory()
            ->count(2)
            ->create([
                'examination_factor_id' => $examinationFactor->id,
            ]);

        $response = $this->getJson(
            route(
                'api.examination-factors.patient-examinations.index',
                $examinationFactor
            )
        );

        $response->assertOk()->assertSee($patientExaminations[0]->id);
    }

    /**
     * @test
     */
    public function it_stores_the_examination_factor_patient_examinations()
    {
        $examinationFactor = ExaminationFactor::factory()->create();
        $data = PatientExamination::factory()
            ->make([
                'examination_factor_id' => $examinationFactor->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route(
                'api.examination-factors.patient-examinations.store',
                $examinationFactor
            ),
            $data
        );

        $this->assertDatabaseHas('patient_examinations', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $patientExamination = PatientExamination::latest('id')->first();

        $this->assertEquals(
            $examinationFactor->id,
            $patientExamination->examination_factor_id
        );
    }
}
