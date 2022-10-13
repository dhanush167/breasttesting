<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\FollowupReason;
use App\Models\PatienFollowup;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FollowupReasonPatienFollowupsTest extends TestCase
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
    public function it_gets_followup_reason_patien_followups()
    {
        $followupReason = FollowupReason::factory()->create();
        $patienFollowups = PatienFollowup::factory()
            ->count(2)
            ->create([
                'followup_reason_id' => $followupReason->id,
            ]);

        $response = $this->getJson(
            route(
                'api.followup-reasons.patien-followups.index',
                $followupReason
            )
        );

        $response->assertOk()->assertSee($patienFollowups[0]->date);
    }

    /**
     * @test
     */
    public function it_stores_the_followup_reason_patien_followups()
    {
        $followupReason = FollowupReason::factory()->create();
        $data = PatienFollowup::factory()
            ->make([
                'followup_reason_id' => $followupReason->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route(
                'api.followup-reasons.patien-followups.store',
                $followupReason
            ),
            $data
        );

        $this->assertDatabaseHas('patien_followups', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $patienFollowup = PatienFollowup::latest('id')->first();

        $this->assertEquals(
            $followupReason->id,
            $patienFollowup->followup_reason_id
        );
    }
}
