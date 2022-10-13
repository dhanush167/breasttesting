<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\CommonProblem;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommonProblemControllerTest extends TestCase
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
    public function it_displays_index_view_with_common_problems()
    {
        $commonProblems = CommonProblem::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('common-problems.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.common_problems.index')
            ->assertViewHas('commonProblems');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_common_problem()
    {
        $response = $this->get(route('common-problems.create'));

        $response->assertOk()->assertViewIs('app.common_problems.create');
    }

    /**
     * @test
     */
    public function it_stores_the_common_problem()
    {
        $data = CommonProblem::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('common-problems.store'), $data);

        $this->assertDatabaseHas('common_problems', $data);

        $commonProblem = CommonProblem::latest('id')->first();

        $response->assertRedirect(
            route('common-problems.edit', $commonProblem)
        );
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_common_problem()
    {
        $commonProblem = CommonProblem::factory()->create();

        $response = $this->get(route('common-problems.show', $commonProblem));

        $response
            ->assertOk()
            ->assertViewIs('app.common_problems.show')
            ->assertViewHas('commonProblem');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_common_problem()
    {
        $commonProblem = CommonProblem::factory()->create();

        $response = $this->get(route('common-problems.edit', $commonProblem));

        $response
            ->assertOk()
            ->assertViewIs('app.common_problems.edit')
            ->assertViewHas('commonProblem');
    }

    /**
     * @test
     */
    public function it_updates_the_common_problem()
    {
        $commonProblem = CommonProblem::factory()->create();

        $data = [
            'short_code' => $this->faker->text(255),
            'problem' => $this->faker->text,
        ];

        $response = $this->put(
            route('common-problems.update', $commonProblem),
            $data
        );

        $data['id'] = $commonProblem->id;

        $this->assertDatabaseHas('common_problems', $data);

        $response->assertRedirect(
            route('common-problems.edit', $commonProblem)
        );
    }

    /**
     * @test
     */
    public function it_deletes_the_common_problem()
    {
        $commonProblem = CommonProblem::factory()->create();

        $response = $this->delete(
            route('common-problems.destroy', $commonProblem)
        );

        $response->assertRedirect(route('common-problems.index'));

        $this->assertModelMissing($commonProblem);
    }
}
