<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\BookingSetting;

use App\Models\Location;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookingSettingControllerTest extends TestCase
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
    public function it_displays_index_view_with_booking_settings()
    {
        $bookingSettings = BookingSetting::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('booking-settings.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.booking_settings.index')
            ->assertViewHas('bookingSettings');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_booking_setting()
    {
        $response = $this->get(route('booking-settings.create'));

        $response->assertOk()->assertViewIs('app.booking_settings.create');
    }

    /**
     * @test
     */
    public function it_stores_the_booking_setting()
    {
        $data = BookingSetting::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('booking-settings.store'), $data);

        $this->assertDatabaseHas('booking_settings', $data);

        $bookingSetting = BookingSetting::latest('id')->first();

        $response->assertRedirect(
            route('booking-settings.edit', $bookingSetting)
        );
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_booking_setting()
    {
        $bookingSetting = BookingSetting::factory()->create();

        $response = $this->get(route('booking-settings.show', $bookingSetting));

        $response
            ->assertOk()
            ->assertViewIs('app.booking_settings.show')
            ->assertViewHas('bookingSetting');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_booking_setting()
    {
        $bookingSetting = BookingSetting::factory()->create();

        $response = $this->get(route('booking-settings.edit', $bookingSetting));

        $response
            ->assertOk()
            ->assertViewIs('app.booking_settings.edit')
            ->assertViewHas('bookingSetting');
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

        $response = $this->put(
            route('booking-settings.update', $bookingSetting),
            $data
        );

        $data['id'] = $bookingSetting->id;

        $this->assertDatabaseHas('booking_settings', $data);

        $response->assertRedirect(
            route('booking-settings.edit', $bookingSetting)
        );
    }

    /**
     * @test
     */
    public function it_deletes_the_booking_setting()
    {
        $bookingSetting = BookingSetting::factory()->create();

        $response = $this->delete(
            route('booking-settings.destroy', $bookingSetting)
        );

        $response->assertRedirect(route('booking-settings.index'));

        $this->assertModelMissing($bookingSetting);
    }
}
