<?php

namespace App\Http\Controllers\Api;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatientProblemResource;
use App\Http\Resources\PatientProblemCollection;

class PatientPatientProblemsController extends Controller
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

        $patientProblems = $patient
            ->patientProblems()
            ->search($search)
            ->latest()
            ->paginate();

        return new PatientProblemCollection($patientProblems);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Patient $patient)
    {
        $this->authorize('create', PatientProblem::class);

        $validated = $request->validate([
            'common_problem_id' => ['required', 'exists:common_problems,id'],
        ]);

        $patientProblem = $patient->patientProblems()->create($validated);

        return new PatientProblemResource($patientProblem);
    }
}
