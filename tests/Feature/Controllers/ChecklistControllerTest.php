<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\Checklist;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ChecklistControllerTest extends TestCase
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
    public function it_displays_index_view_with_checklists()
    {
        $checklists = Checklist::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('checklists.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.checklists.index')
            ->assertViewHas('checklists');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_checklist()
    {
        $response = $this->get(route('checklists.create'));

        $response->assertOk()->assertViewIs('app.checklists.create');
    }

    /**
     * @test
     */
    public function it_stores_the_checklist()
    {
        $data = Checklist::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('checklists.store'), $data);

        $this->assertDatabaseHas('checklists', $data);

        $checklist = Checklist::latest('id')->first();

        $response->assertRedirect(route('checklists.edit', $checklist));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_checklist()
    {
        $checklist = Checklist::factory()->create();

        $response = $this->get(route('checklists.show', $checklist));

        $response
            ->assertOk()
            ->assertViewIs('app.checklists.show')
            ->assertViewHas('checklist');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_checklist()
    {
        $checklist = Checklist::factory()->create();

        $response = $this->get(route('checklists.edit', $checklist));

        $response
            ->assertOk()
            ->assertViewIs('app.checklists.edit')
            ->assertViewHas('checklist');
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

        $response = $this->put(route('checklists.update', $checklist), $data);

        $data['id'] = $checklist->id;

        $this->assertDatabaseHas('checklists', $data);

        $response->assertRedirect(route('checklists.edit', $checklist));
    }

    /**
     * @test
     */
    public function it_deletes_the_checklist()
    {
        $checklist = Checklist::factory()->create();

        $response = $this->delete(route('checklists.destroy', $checklist));

        $response->assertRedirect(route('checklists.index'));

        $this->assertModelMissing($checklist);
    }
}
