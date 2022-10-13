<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\FollowupReason;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FollowupReasonControllerTest extends TestCase
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
    public function it_displays_index_view_with_followup_reasons()
    {
        $followupReasons = FollowupReason::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('followup-reasons.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.followup_reasons.index')
            ->assertViewHas('followupReasons');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_followup_reason()
    {
        $response = $this->get(route('followup-reasons.create'));

        $response->assertOk()->assertViewIs('app.followup_reasons.create');
    }

    /**
     * @test
     */
    public function it_stores_the_followup_reason()
    {
        $data = FollowupReason::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('followup-reasons.store'), $data);

        $this->assertDatabaseHas('followup_reasons', $data);

        $followupReason = FollowupReason::latest('id')->first();

        $response->assertRedirect(
            route('followup-reasons.edit', $followupReason)
        );
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_followup_reason()
    {
        $followupReason = FollowupReason::factory()->create();

        $response = $this->get(route('followup-reasons.show', $followupReason));

        $response
            ->assertOk()
            ->assertViewIs('app.followup_reasons.show')
            ->assertViewHas('followupReason');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_followup_reason()
    {
        $followupReason = FollowupReason::factory()->create();

        $response = $this->get(route('followup-reasons.edit', $followupReason));

        $response
            ->assertOk()
            ->assertViewIs('app.followup_reasons.edit')
            ->assertViewHas('followupReason');
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

        $response = $this->put(
            route('followup-reasons.update', $followupReason),
            $data
        );

        $data['id'] = $followupReason->id;

        $this->assertDatabaseHas('followup_reasons', $data);

        $response->assertRedirect(
            route('followup-reasons.edit', $followupReason)
        );
    }

    /**
     * @test
     */
    public function it_deletes_the_followup_reason()
    {
        $followupReason = FollowupReason::factory()->create();

        $response = $this->delete(
            route('followup-reasons.destroy', $followupReason)
        );

        $response->assertRedirect(route('followup-reasons.index'));

        $this->assertModelMissing($followupReason);
    }
}
