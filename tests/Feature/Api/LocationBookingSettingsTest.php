<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Location;
use App\Models\BookingSetting;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LocationBookingSettingsTest extends TestCase
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
    public function it_gets_location_booking_settings()
    {
        $location = Location::factory()->create();
        $bookingSettings = BookingSetting::factory()
            ->count(2)
            ->create([
                'location_id' => $location->id,
            ]);

        $response = $this->getJson(
            route('api.locations.booking-settings.index', $location)
        );

        $response->assertOk()->assertSee($bookingSettings[0]->id);
    }

    /**
     * @test
     */
    public function it_stores_the_location_booking_settings()
    {
        $location = Location::factory()->create();
        $data = BookingSetting::factory()
            ->make([
                'location_id' => $location->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.locations.booking-settings.store', $location),
            $data
        );

        $this->assertDatabaseHas('booking_settings', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $bookingSetting = BookingSetting::latest('id')->first();

        $this->assertEquals($location->id, $bookingSetting->location_id);
    }
}
