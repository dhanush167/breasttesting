<?php

namespace App\Http\Controllers\Api;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatientBookingResource;
use App\Http\Resources\PatientBookingCollection;

class PatientPatientBookingsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Patient $patient)
    {
        $this->authorize('view', $patient);

        $search = $request->get('search', '');

        $patientBookings = $patient
            ->patientBookings()
            ->search($search)
            ->latest()
            ->paginate();

        return new PatientBookingCollection($patientBookings);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Patient $patient)
    {
        $this->authorize('create', PatientBooking::class);

        $validated = $request->validate([
            'location_id' => ['required', 'exists:locations,id'],
            'booking_date' => ['required', 'date'],
            'booking_slot' => ['required', 'string'],
            'booked_by' => ['required', 'string'],
            'booked_via' => ['required', 'string'],
            'status' => ['required', 'string'],
        ]);

        $patientBooking = $patient->patientBookings()->create($validated);

        return new PatientBookingResource($patientBooking);
    }
}
