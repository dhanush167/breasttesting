<?php

namespace App\Http\Controllers\Api;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatientExaminationResource;
use App\Http\Resources\PatientExaminationCollection;

class PatientPatientExaminationsController extends Controller
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

        $patientExaminations = $patient
            ->patientExaminations()
            ->search($search)
            ->latest()
            ->paginate();

        return new PatientExaminationCollection($patientExaminations);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Patient $patient)
    {
        $this->authorize('create', PatientExamination::class);

        $validated = $request->validate([
            'examination_factor_id' => [
                'required',
                'exists:examination_factors,id',
            ],
            'value' => ['nullable', 'string'],
        ]);

        $patientExamination = $patient
            ->patientExaminations()
            ->create($validated);

        return new PatientExaminationResource($patientExamination);
    }
}
