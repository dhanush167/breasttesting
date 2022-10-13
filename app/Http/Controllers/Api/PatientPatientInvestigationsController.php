<?php

namespace App\Http\Controllers\Api;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatientInvestigationResource;
use App\Http\Resources\PatientInvestigationCollection;

class PatientPatientInvestigationsController extends Controller
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

        $patientInvestigations = $patient
            ->patientInvestigations()
            ->search($search)
            ->latest()
            ->paginate();

        return new PatientInvestigationCollection($patientInvestigations);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Patient $patient)
    {
        $this->authorize('create', PatientInvestigation::class);

        $validated = $request->validate([
            'pap' => ['nullable', 'string'],
            'hpv_dna' => ['nullable', 'string'],
        ]);

        $patientInvestigation = $patient
            ->patientInvestigations()
            ->create($validated);

        return new PatientInvestigationResource($patientInvestigation);
    }
}
