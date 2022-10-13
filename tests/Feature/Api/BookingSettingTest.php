<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\BookingSetting;

use App\Models\Location;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookingSettingTest extends TestCase
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
    public function it_gets_booking_settings_list()
    {
        $bookingSettings = BookingSetting::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.booking-settings.index'));

        $response->assertOk()->assertSee($bookingSettings[0]->id);
    }

    /**
     * @test
     */
    public function it_stores_the_booking_setting()
    {
        $data = BookingSetting::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.booking-settings.store'), $data);

        $this->assertDatabaseHas('booking_settings', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_booking_setting()
    {
        $bookingSetting = BookingSetting::factory()->create();

        $location = Location::factory()->create();

        $data = [
            'year' => $this->faker->year,
            'weekly_working_days' => $this->faker->text,
            'holidays' => $this->faker->text,
            'day_start_time' => $this->faker->time,
            'day_end_time' => $this->faker->time,
            'slot_duration' => $this->faker->randomNumber(0),
            'status' => $this->faker->boolean,
            'location_id' => $location->id,
        ];

        $response = $this->putJson(
            route('api.booking-settings.update', $bookingSetting),
            $data
        );

        $data['id'] = $bookingSetting->id;

        $this->assertDatabaseHas('booking_settings', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_booking_setting()
    {
        $bookingSetting = BookingSetting::factory()->create();

        $response = $this->deleteJson(
            route('api.booking-settings.destroy', $bookingSetting)
        );

        $this->assertModelMissing($bookingSetting);

        $response->assertNoContent();
    }
}
