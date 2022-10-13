<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\CancerType;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CancerTypeControllerTest extends TestCase
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
    public function it_displays_index_view_with_cancer_types()
    {
        $cancerTypes = CancerType::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('cancer-types.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.cancer_types.index')
            ->assertViewHas('cancerTypes');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_cancer_type()
    {
        $response = $this->get(route('cancer-types.create'));

        $response->assertOk()->assertViewIs('app.cancer_types.create');
    }

    /**
     * @test
     */
    public function it_stores_the_cancer_type()
    {
        $data = CancerType::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('cancer-types.store'), $data);

        $this->assertDatabaseHas('cancer_types', $data);

        $cancerType = CancerType::latest('id')->first();

        $response->assertRedirect(route('cancer-types.edit', $cancerType));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_cancer_type()
    {
        $cancerType = CancerType::factory()->create();

        $response = $this->get(route('cancer-types.show', $cancerType));

        $response
            ->assertOk()
            ->assertViewIs('app.cancer_types.show')
            ->assertViewHas('cancerType');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_cancer_type()
    {
        $cancerType = CancerType::factory()->create();

        $response = $this->get(route('cancer-types.edit', $cancerType));

        $response
            ->assertOk()
            ->assertViewIs('app.cancer_types.edit')
            ->assertViewHas('cancerType');
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

        $response = $this->put(
            route('cancer-types.update', $cancerType),
            $data
        );

        $data['id'] = $cancerType->id;

        $this->assertDatabaseHas('cancer_types', $data);

        $response->assertRedirect(route('cancer-types.edit', $cancerType));
    }

    /**
     * @test
     */
    public function it_deletes_the_cancer_type()
    {
        $cancerType = CancerType::factory()->create();

        $response = $this->delete(route('cancer-types.destroy', $cancerType));

        $response->assertRedirect(route('cancer-types.index'));

        $this->assertModelMissing($cancerType);
    }
}
