<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\CommonProblem;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CommonProblemTest extends TestCase
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
    public function it_gets_common_problems_list()
    {
        $commonProblems = CommonProblem::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.common-problems.index'));

        $response->assertOk()->assertSee($commonProblems[0]->short_code);
    }

    /**
     * @test
     */
    public function it_stores_the_common_problem()
    {
        $data = CommonProblem::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.common-problems.store'), $data);

        $this->assertDatabaseHas('common_problems', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
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

        $response = $this->putJson(
            route('api.common-problems.update', $commonProblem),
            $data
        );

        $data['id'] = $commonProblem->id;

        $this->assertDatabaseHas('common_problems', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_common_problem()
    {
        $commonProblem = CommonProblem::factory()->create();

        $response = $this->deleteJson(
            route('api.common-problems.destroy', $commonProblem)
        );

        $this->assertModelMissing($commonProblem);

        $response->assertNoContent();
    }
}
