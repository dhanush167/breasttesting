<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Patient;
use App\Models\PatientBooking;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PatientPatientBookingsTest extends TestCase
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
    public function it_gets_patient_patient_bookings()
    {
        $patient = Patient::factory()->create();
        $patientBookings = PatientBooking::factory()
            ->count(2)
            ->create([
                'patient_id' => $patient->id,
            ]);

        $response = $this->getJson(
            route('api.patients.patient-bookings.index', $patient)
        );

        $response->assertOk()->assertSee($patientBookings[0]->booking_date);
    }

    /**
     * @test
     */
    public function it_stores_the_patient_patient_bookings()
    {
        $patient = Patient::factory()->create();
        $data = PatientBooking::factory()
            ->make([
                'patient_id' => $patient->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.patients.patient-bookings.store', $patient),
            $data
        );

        $this->assertDatabaseHas('patient_bookings', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $patientBooking = PatientBooking::latest('id')->first();

        $this->assertEquals($patient->id, $patientBooking->patient_id);
    }
}
