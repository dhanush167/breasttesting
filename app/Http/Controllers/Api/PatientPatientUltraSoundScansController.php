<?php

namespace App\Http\Controllers\Api;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatientUltraSoundScanResource;
use App\Http\Resources\PatientUltraSoundScanCollection;

class PatientPatientUltraSoundScansController extends Controller
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

        $patientUltraSoundScans = $patient
            ->patientUltraSoundScans()
            ->search($search)
            ->latest()
            ->paginate();

        return new PatientUltraSoundScanCollection($patientUltraSoundScans);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Patient $patient)
    {
        $this->authorize('create', PatientUltraSoundScan::class);

        $validated = $request->validate([
            'ultra_sound_scan_factor_id' => [
                'required',
                'exists:ultra_sound_scan_factors,id',
            ],
            'value' => ['required', 'string'],
        ]);

        $patientUltraSoundScan = $patient
            ->patientUltraSoundScans()
            ->create($validated);

        return new PatientUltraSoundScanResource($patientUltraSoundScan);
    }
}
