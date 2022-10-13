<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\PatientBooking;

use App\Models\Patient;
use App\Models\Location;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientBookingTest extends TestCase
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
    public function it_gets_patient_bookings_list()
    {
        $patientBookings = PatientBooking::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.patient-bookings.index'));

        $response->assertOk()->assertSee($patientBookings[0]->booking_date);
    }

    /**
     * @test
     */
    public function it_stores_the_patient_booking()
    {
        $data = PatientBooking::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.patient-bookings.store'), $data);

        $this->assertDatabaseHas('patient_bookings', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_patient_booking()
    {
        $patientBooking = PatientBooking::factory()->create();

        $patient = Patient::factory()->create();
        $location = Location::factory()->create();

        $data = [
            'booking_date' => $this->faker->date,
            'booking_slot' => $this->faker->text(255),
            'booked_by' => $this->faker->text(255),
            'booked_via' => $this->faker->text(255),
            'status' => $this->faker->word,
            'patient_id' => $patient->id,
            'location_id' => $location->id,
        ];

        $response = $this->putJson(
            route('api.patient-bookings.update', $patientBooking),
            $data
        );

        $data['id'] = $patientBooking->id;

        $this->assertDatabaseHas('patient_bookings', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_patient_booking()
    {
        $patientBooking = PatientBooking::factory()->create();

        $response = $this->deleteJson(
            route('api.patient-bookings.destroy', $patientBooking)
        );

        $this->assertModelMissing($patientBooking);

        $response->assertNoContent();
    }
}
