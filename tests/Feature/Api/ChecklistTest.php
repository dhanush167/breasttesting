<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Checklist;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ChecklistTest extends TestCase
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
    public function it_gets_checklists_list()
    {
        $checklists = Checklist::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.checklists.index'));

        $response->assertOk()->assertSee($checklists[0]->name);
    }

    /**
     * @test
     */
    public function it_stores_the_checklist()
    {
        $data = Checklist::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.checklists.store'), $data);

        $this->assertDatabaseHas('checklists', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_checklist()
    {
        $checklist = Checklist::factory()->create();

        $data = [
            'name' => $this->faker->name,
        ];

        $response = $this->putJson(
            route('api.checklists.update', $checklist),
            $data
        );

        $data['id'] = $checklist->id;

        $this->assertDatabaseHas('checklists', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_checklist()
    {
        $checklist = Checklist::factory()->create();

        $response = $this->deleteJson(
            route('api.checklists.destroy', $checklist)
        );

        $this->assertModelMissing($checklist);

        $response->assertNoContent();
    }
}
