<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\ExaminationFactor;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatientExaminationResource;
use App\Http\Resources\PatientExaminationCollection;

class ExaminationFactorPatientExaminationsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ExaminationFactor $examinationFactor
     * @return \Illuminate\Http\Response
     */
    public function index(
        Request $request,
        ExaminationFactor $examinationFactor
    ) {
        $this->authorize('view', $examinationFactor);

        $search = $request->get('search', '');

        $patientExaminations = $examinationFactor
            ->patientExaminations()
            ->search($search)
            ->latest()
            ->paginate();

        return new PatientExaminationCollection($patientExaminations);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ExaminationFactor $examinationFactor
     * @return \Illuminate\Http\Response
     */
    public function store(
        Request $request,
        ExaminationFactor $examinationFactor
    ) {
        $this->authorize('create', PatientExamination::class);

        $validated = $request->validate([
            'patient_id' => ['required', 'exists:patients,id'],
            'value' => ['nullable', 'string'],
        ]);

        $patientExamination = $examinationFactor
            ->patientExaminations()
            ->create($validated);

        return new PatientExaminationResource($patientExamination);
    }
}
