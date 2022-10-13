<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\FollowupReason;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FollowupReasonTest extends TestCase
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
    public function it_gets_followup_reasons_list()
    {
        $followupReasons = FollowupReason::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.followup-reasons.index'));

        $response->assertOk()->assertSee($followupReasons[0]->id);
    }

    /**
     * @test
     */
    public function it_stores_the_followup_reason()
    {
        $data = FollowupReason::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.followup-reasons.store'), $data);

        $this->assertDatabaseHas('followup_reasons', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_followup_reason()
    {
        $followupReason = FollowupReason::factory()->create();

        $data = [
            'reason' => $this->faker->text,
        ];

        $response = $this->putJson(
            route('api.followup-reasons.update', $followupReason),
            $data
        );

        $data['id'] = $followupReason->id;

        $this->assertDatabaseHas('followup_reasons', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_followup_reason()
    {
        $followupReason = FollowupReason::factory()->create();

        $response = $this->deleteJson(
            route('api.followup-reasons.destroy', $followupReason)
        );

        $this->assertModelMissing($followupReason);

        $response->assertNoContent();
    }
}
