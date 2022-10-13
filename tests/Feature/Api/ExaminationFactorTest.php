<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\ExaminationFactor;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExaminationFactorTest extends TestCase
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
    public function it_gets_examination_factors_list()
    {
        $examinationFactors = ExaminationFactor::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.examination-factors.index'));

        $response->assertOk()->assertSee($examinationFactors[0]->name);
    }

    /**
     * @test
     */
    public function it_stores_the_examination_factor()
    {
        $data = ExaminationFactor::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(
            route('api.examination-factors.store'),
            $data
        );

        $this->assertDatabaseHas('examination_factors', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
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

        $response = $this->putJson(
            route('api.examination-factors.update', $examinationFactor),
            $data
        );

        $data['id'] = $examinationFactor->id;

        $this->assertDatabaseHas('examination_factors', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_examination_factor()
    {
        $examinationFactor = ExaminationFactor::factory()->create();

        $response = $this->deleteJson(
            route('api.examination-factors.destroy', $examinationFactor)
        );

        $this->assertModelMissing($examinationFactor);

        $response->assertNoContent();
    }
}
