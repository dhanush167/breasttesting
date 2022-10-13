<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\CommonProblem;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatientProblemResource;
use App\Http\Resources\PatientProblemCollection;

class CommonProblemPatientProblemsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CommonProblem $commonProblem
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, CommonProblem $commonProblem)
    {
        $this->authorize('view', $commonProblem);

        $search = $request->get('search', '');

        $patientProblems = $commonProblem
            ->patientProblems()
            ->search($search)
            ->latest()
            ->paginate();

        return new PatientProblemCollection($patientProblems);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CommonProblem $commonProblem
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CommonProblem $commonProblem)
    {
        $this->authorize('create', PatientProblem::class);

        $validated = $request->validate([
            'patient_id' => ['required', 'exists:patients,id'],
        ]);

        $patientProblem = $commonProblem->patientProblems()->create($validated);

        return new PatientProblemResource($patientProblem);
    }
}
