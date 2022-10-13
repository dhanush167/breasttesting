<?php

namespace App\Http\Controllers\Api;

use App\Models\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatientBookingResource;
use App\Http\Resources\PatientBookingCollection;

class LocationPatientBookingsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Location $location
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Location $location)
    {
        $this->authorize('view', $location);

        $search = $request->get('search', '');

        $patientBookings = $location
            ->patientBookings()
            ->search($search)
            ->latest()
            ->paginate();

        return new PatientBookingCollection($patientBookings);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Location $location
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Location $location)
    {
        $this->authorize('create', PatientBooking::class);

        $validated = $request->validate([
            'patient_id' => ['required', 'exists:patients,id'],
            'booking_date' => ['required', 'date'],
            'booking_slot' => ['required', 'string'],
            'booked_by' => ['required', 'string'],
            'booked_via' => ['required', 'string'],
            'status' => ['required', 'string'],
        ]);

        $patientBooking = $location->patientBookings()->create($validated);

        return new PatientBookingResource($patientBooking);
    }
}
