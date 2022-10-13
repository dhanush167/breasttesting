<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\UltraSoundScanFactor;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatientUltraSoundScanResource;
use App\Http\Resources\PatientUltraSoundScanCollection;

class UltraSoundScanFactorPatientUltraSoundScansController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\UltraSoundScanFactor $ultraSoundScanFactor
     * @return \Illuminate\Http\Response
     */
    public function index(
        Request $request,
        UltraSoundScanFactor $ultraSoundScanFactor
    ) {
        $this->authorize('view', $ultraSoundScanFactor);

        $search = $request->get('search', '');

        $patientUltraSoundScans = $ultraSoundScanFactor
            ->patientUltraSoundScans()
            ->search($search)
            ->latest()
            ->paginate();

        return new PatientUltraSoundScanCollection($patientUltraSoundScans);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\UltraSoundScanFactor $ultraSoundScanFactor
     * @return \Illuminate\Http\Response
     */
    public function store(
        Request $request,
        UltraSoundScanFactor $ultraSoundScanFactor
    ) {
        $this->authorize('create', PatientUltraSoundScan::class);

        $validated = $request->validate([
            'patient_id' => ['required', 'exists:patients,id'],
            'value' => ['required', 'string'],
        ]);

        $patientUltraSoundScan = $ultraSoundScanFactor
            ->patientUltraSoundScans()
            ->create($validated);

        return new PatientUltraSoundScanResource($patientUltraSoundScan);
    }
}
