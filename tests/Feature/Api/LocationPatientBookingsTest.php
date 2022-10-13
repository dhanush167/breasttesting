<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Location;
use App\Models\PatientBooking;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LocationPatientBookingsTest extends TestCase
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
    public function it_gets_location_patient_bookings()
    {
        $location = Location::factory()->create();
        $patientBookings = PatientBooking::factory()
            ->count(2)
            ->create([
                'location_id' => $location->id,
            ]);

        $response = $this->getJson(
            route('api.locations.patient-bookings.index', $location)
        );

        $response->assertOk()->assertSee($patientBookings[0]->booking_date);
    }

    /**
     * @test
     */
    public function it_stores_the_location_patient_bookings()
    {
        $location = Location::factory()->create();
        $data = PatientBooking::factory()
            ->make([
                'location_id' => $location->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.locations.patient-bookings.store', $location),
            $data
        );

        $this->assertDatabaseHas('patient_bookings', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $patientBooking = PatientBooking::latest('id')->first();

        $this->assertEquals($location->id, $patientBooking->location_id);
    }
}
