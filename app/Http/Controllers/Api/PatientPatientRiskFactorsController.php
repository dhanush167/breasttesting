<?php

namespace App\Http\Controllers\Api;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatientRiskFactorResource;
use App\Http\Resources\PatientRiskFactorCollection;

class PatientPatientRiskFactorsController extends Controller
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

        $patientRiskFactors = $patient
            ->patientRiskFactors()
            ->search($search)
            ->latest()
            ->paginate();

        return new PatientRiskFactorCollection($patientRiskFactors);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Patient $patient)
    {
        $this->authorize('create', PatientRiskFactor::class);

        $validated = $request->validate([
            'age_of_menarche' => ['nullable', 'string'],
            'lrmp' => ['nullable', 'string'],
            'ocp' => ['nullable', 'string'],
            'hrt' => ['nullable', 'string'],
            'age_of_menopause' => ['nullable', 'string'],
            'post_menopausal_bleeding' => ['nullable', 'string'],
            'betel_chewing' => ['nullable', 'string'],
            'areca_nut' => ['nullable', 'string'],
            'smoking' => ['nullable', 'string'],
            'alcohol' => ['nullable', 'string'],
            'other_risk_factor' => ['nullable', 'string'],
            'sexual_hx' => ['nullable', 'string'],
            'occupation_radiation' => ['nullable', 'boolean'],
        ]);

        $patientRiskFactor = $patient->patientRiskFactors()->create($validated);

        return new PatientRiskFactorResource($patientRiskFactor);
    }
}
