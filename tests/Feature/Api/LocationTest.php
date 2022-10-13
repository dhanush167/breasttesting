<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Location;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LocationTest extends TestCase
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
    public function it_gets_locations_list()
    {
        $locations = Location::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.locations.index'));

        $response->assertOk()->assertSee($locations[0]->name);
    }

    /**
     * @test
     */
    public function it_stores_the_location()
    {
        $data = Location::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.locations.store'), $data);

        $this->assertDatabaseHas('locations', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_location()
    {
        $location = Location::factory()->create();

        $data = [
            'name' => $this->faker->name,
            'address' => $this->faker->text,
            'contact_no' => $this->faker->text(20),
            'logo' => $this->faker->text(255),
            'email' => $this->faker->email,
        ];

        $response = $this->putJson(
            route('api.locations.update', $location),
            $data
        );

        $data['id'] = $location->id;

        $this->assertDatabaseHas('locations', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_location()
    {
        $location = Location::factory()->create();

        $response = $this->deleteJson(
            route('api.locations.destroy', $location)
        );

        $this->assertModelMissing($location);

        $response->assertNoContent();
    }
}
