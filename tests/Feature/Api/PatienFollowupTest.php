<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\PatienFollowup;

use App\Models\Patient;
use App\Models\FollowupReason;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatienFollowupTest extends TestCase
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
    public function it_gets_patien_followups_list()
    {
        $patienFollowups = PatienFollowup::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.patien-followups.index'));

        $response->assertOk()->assertSee($patienFollowups[0]->date);
    }

    /**
     * @test
     */
    public function it_stores_the_patien_followup()
    {
        $data = PatienFollowup::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.patien-followups.store'), $data);

        $this->assertDatabaseHas('patien_followups', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_patien_followup()
    {
        $patienFollowup = PatienFollowup::factory()->create();

        $patient = Patient::factory()->create();
        $followupReason = FollowupReason::factory()->create();

        $data = [
            'other_comments' => $this->faker->text,
            'date' => $this->faker->date,
            'patient_id' => $patient->id,
            'followup_reason_id' => $followupReason->id,
        ];

        $response = $this->putJson(
            route('api.patien-followups.update', $patienFollowup),
            $data
        );

        $data['id'] = $patienFollowup->id;

        $this->assertDatabaseHas('patien_followups', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_patien_followup()
    {
        $patienFollowup = PatienFollowup::factory()->create();

        $response = $this->deleteJson(
            route('api.patien-followups.destroy', $patienFollowup)
        );

        $this->assertModelMissing($patienFollowup);

        $response->assertNoContent();
    }
}
