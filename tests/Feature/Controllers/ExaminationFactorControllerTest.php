<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\ExaminationFactor;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExaminationFactorControllerTest extends TestCase
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
    public function it_displays_index_view_with_examination_factors()
    {
        $examinationFactors = ExaminationFactor::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('examination-factors.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.examination_factors.index')
            ->assertViewHas('examinationFactors');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_examination_factor()
    {
        $response = $this->get(route('examination-factors.create'));

        $response->assertOk()->assertViewIs('app.examination_factors.create');
    }

    /**
     * @test
     */
    public function it_stores_the_examination_factor()
    {
        $data = ExaminationFactor::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('examination-factors.store'), $data);

        $this->assertDatabaseHas('examination_factors', $data);

        $examinationFactor = ExaminationFactor::latest('id')->first();

        $response->assertRedirect(
            route('examination-factors.edit', $examinationFactor)
        );
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_examination_factor()
    {
        $examinationFactor = ExaminationFactor::factory()->create();

        $response = $this->get(
            route('examination-factors.show', $examinationFactor)
        );

        $response
            ->assertOk()
            ->assertViewIs('app.examination_factors.show')
            ->assertViewHas('examinationFactor');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_examination_factor()
    {
        $examinationFactor = ExaminationFactor::factory()->create();

        $response = $this->get(
            route('examination-factors.edit', $examinationFactor)
        );

        $response
            ->assertOk()
            ->assertViewIs('app.examination_factors.edit')
            ->assertViewHas('examinationFactor');
    }

    /**
     * @test
     */
    public function it_updates_the_examination_factor()
    {
        $examinationFactor = ExaminationFactor::factory()->create();

        $data = [
            'name' => $this->faker->name,
            'type' => $this->faker->word,
        ];

        $response = $this->put(
            route('examination-factors.update', $examinationFactor),
            $data
        );

        $data['id'] = $examinationFactor->id;

        $this->assertDatabaseHas('examination_factors', $data);

        $response->assertRedirect(
            route('examination-factors.edit', $examinationFactor)
        );
    }

    /**
     * @test
     */
    public function it_deletes_the_examination_factor()
    {
        $examinationFactor = ExaminationFactor::factory()->create();

        $response = $this->delete(
            route('examination-factors.destroy', $examinationFactor)
        );

        $response->assertRedirect(route('examination-factors.index'));

        $this->assertModelMissing($examinationFactor);
    }
}
