<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\PatientBooking;

use App\Models\Patient;
use App\Models\Location;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientBookingControllerTest extends TestCase
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
    public function it_displays_index_view_with_patient_bookings()
    {
        $patientBookings = PatientBooking::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('patient-bookings.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.patient_bookings.index')
            ->assertViewHas('patientBookings');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_patient_booking()
    {
        $response = $this->get(route('patient-bookings.create'));

        $response->assertOk()->assertViewIs('app.patient_bookings.create');
    }

    /**
     * @test
     */
    public function it_stores_the_patient_booking()
    {
        $data = PatientBooking::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('patient-bookings.store'), $data);

        $this->assertDatabaseHas('patient_bookings', $data);

        $patientBooking = PatientBooking::latest('id')->first();

        $response->assertRedirect(
            route('patient-bookings.edit', $patientBooking)
        );
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_patient_booking()
    {
        $patientBooking = PatientBooking::factory()->create();

        $response = $this->get(route('patient-bookings.show', $patientBooking));

        $response
            ->assertOk()
            ->assertViewIs('app.patient_bookings.show')
            ->assertViewHas('patientBooking');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_patient_booking()
    {
        $patientBooking = PatientBooking::factory()->create();

        $response = $this->get(route('patient-bookings.edit', $patientBooking));

        $response
            ->assertOk()
            ->assertViewIs('app.patient_bookings.edit')
            ->assertViewHas('patientBooking');
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

        $response = $this->put(
            route('patient-bookings.update', $patientBooking),
            $data
        );

        $data['id'] = $patientBooking->id;

        $this->assertDatabaseHas('patient_bookings', $data);

        $response->assertRedirect(
            route('patient-bookings.edit', $patientBooking)
        );
    }

    /**
     * @test
     */
    public function it_deletes_the_patient_booking()
    {
        $patientBooking = PatientBooking::factory()->create();

        $response = $this->delete(
            route('patient-bookings.destroy', $patientBooking)
        );

        $response->assertRedirect(route('patient-bookings.index'));

        $this->assertModelMissing($patientBooking);
    }
}
