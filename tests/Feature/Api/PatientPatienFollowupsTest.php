<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Patient;
use App\Models\PatienFollowup;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientPatienFollowupsTest extends TestCase
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
    public function it_gets_patient_patien_followups()
    {
        $patient = Patient::factory()->create();
        $patienFollowups = PatienFollowup::factory()
            ->count(2)
            ->create([
                'patient_id' => $patient->id,
            ]);

        $response = $this->getJson(
            route('api.patients.patien-followups.index', $patient)
        );

        $response->assertOk()->assertSee($patienFollowups[0]->date);
    }

    /**
     * @test
     */
    public function it_stores_the_patient_patien_followups()
    {
        $patient = Patient::factory()->create();
        $data = PatienFollowup::factory()
            ->make([
                'patient_id' => $patient->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.patients.patien-followups.store', $patient),
            $data
        );

        $this->assertDatabaseHas('patien_followups', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $patienFollowup = PatienFollowup::latest('id')->first();

        $this->assertEquals($patient->id, $patienFollowup->patient_id);
    }
}
