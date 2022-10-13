<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\PatienFollowup;

use App\Models\Patient;
use App\Models\FollowupReason;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatienFollowupControllerTest extends TestCase
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
    public function it_displays_index_view_with_patien_followups()
    {
        $patienFollowups = PatienFollowup::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('patien-followups.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.patien_followups.index')
            ->assertViewHas('patienFollowups');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_patien_followup()
    {
        $response = $this->get(route('patien-followups.create'));

        $response->assertOk()->assertViewIs('app.patien_followups.create');
    }

    /**
     * @test
     */
    public function it_stores_the_patien_followup()
    {
        $data = PatienFollowup::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('patien-followups.store'), $data);

        $this->assertDatabaseHas('patien_followups', $data);

        $patienFollowup = PatienFollowup::latest('id')->first();

        $response->assertRedirect(
            route('patien-followups.edit', $patienFollowup)
        );
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_patien_followup()
    {
        $patienFollowup = PatienFollowup::factory()->create();

        $response = $this->get(route('patien-followups.show', $patienFollowup));

        $response
            ->assertOk()
            ->assertViewIs('app.patien_followups.show')
            ->assertViewHas('patienFollowup');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_patien_followup()
    {
        $patienFollowup = PatienFollowup::factory()->create();

        $response = $this->get(route('patien-followups.edit', $patienFollowup));

        $response
            ->assertOk()
            ->assertViewIs('app.patien_followups.edit')
            ->assertViewHas('patienFollowup');
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

        $response = $this->put(
            route('patien-followups.update', $patienFollowup),
            $data
        );

        $data['id'] = $patienFollowup->id;

        $this->assertDatabaseHas('patien_followups', $data);

        $response->assertRedirect(
            route('patien-followups.edit', $patienFollowup)
        );
    }

    /**
     * @test
     */
    public function it_deletes_the_patien_followup()
    {
        $patienFollowup = PatienFollowup::factory()->create();

        $response = $this->delete(
            route('patien-followups.destroy', $patienFollowup)
        );

        $response->assertRedirect(route('patien-followups.index'));

        $this->assertModelMissing($patienFollowup);
    }
}
