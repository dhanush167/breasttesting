<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\PatientBooking;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatientBookingResource;
use App\Http\Resources\PatientBookingCollection;
use App\Http\Requests\PatientBookingStoreRequest;
use App\Http\Requests\PatientBookingUpdateRequest;

class PatientBookingController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', PatientBooking::class);

        $search = $request->get('search', '');

        $patientBookings = PatientBooking::search($search)
            ->latest()
            ->paginate();

        return new PatientBookingCollection($patientBookings);
    }

    /**
     * @param \App\Http\Requests\PatientBookingStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientBookingStoreRequest $request)
    {
        $this->authorize('create', PatientBooking::class);

        $validated = $request->validated();

        $patientBooking = PatientBooking::create($validated);

        return new PatientBookingResource($patientBooking);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientBooking $patientBooking
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, PatientBooking $patientBooking)
    {
        $this->authorize('view', $patientBooking);

        return new PatientBookingResource($patientBooking);
    }

    /**
     * @param \App\Http\Requests\PatientBookingUpdateRequest $request
     * @param \App\Models\PatientBooking $patientBooking
     * @return \Illuminate\Http\Response
     */
    public function update(
        PatientBookingUpdateRequest $request,
        PatientBooking $patientBooking
    ) {
        $this->authorize('update', $patientBooking);

        $validated = $request->validated();

        $patientBooking->update($validated);

        return new PatientBookingResource($patientBooking);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientBooking $patientBooking
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, PatientBooking $patientBooking)
    {
        $this->authorize('delete', $patientBooking);

        $patientBooking->delete();

        return response()->noContent();
    }
}
