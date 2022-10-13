<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\CancerType;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CancerTypeTest extends TestCase
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
    public function it_gets_cancer_types_list()
    {
        $cancerTypes = CancerType::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.cancer-types.index'));

        $response->assertOk()->assertSee($cancerTypes[0]->name);
    }

    /**
     * @test
     */
    public function it_stores_the_cancer_type()
    {
        $data = CancerType::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.cancer-types.store'), $data);

        $this->assertDatabaseHas('cancer_types', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_cancer_type()
    {
        $cancerType = CancerType::factory()->create();

        $data = [
            'name' => $this->faker->name,
        ];

        $response = $this->putJson(
            route('api.cancer-types.update', $cancerType),
            $data
        );

        $data['id'] = $cancerType->id;

        $this->assertDatabaseHas('cancer_types', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_cancer_type()
    {
        $cancerType = CancerType::factory()->create();

        $response = $this->deleteJson(
            route('api.cancer-types.destroy', $cancerType)
        );

        $this->assertModelMissing($cancerType);

        $response->assertNoContent();
    }
}
