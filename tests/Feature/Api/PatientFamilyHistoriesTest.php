<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Patient;
use App\Models\FamilyHistory;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientFamilyHistoriesTest extends TestCase
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
    public function it_gets_patient_family_histories()
    {
        $patient = Patient::factory()->create();
        $familyHistories = FamilyHistory::factory()
            ->count(2)
            ->create([
                'patient_id' => $patient->id,
            ]);

        $response = $this->getJson(
            route('api.patients.family-histories.index', $patient)
        );

        $response->assertOk()->assertSee($familyHistories[0]->degree);
    }

    /**
     * @test
     */
    public function it_stores_the_patient_family_histories()
    {
        $patient = Patient::factory()->create();
        $data = FamilyHistory::factory()
            ->make([
                'patient_id' => $patient->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.patients.family-histories.store', $patient),
            $data
        );

        $this->assertDatabaseHas('family_histories', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $familyHistory = FamilyHistory::latest('id')->first();

        $this->assertEquals($patient->id, $familyHistory->patient_id);
    }
}
