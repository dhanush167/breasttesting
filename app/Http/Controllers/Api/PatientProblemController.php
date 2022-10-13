<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\PatientProblem;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatientProblemResource;
use App\Http\Resources\PatientProblemCollection;
use App\Http\Requests\PatientProblemStoreRequest;
use App\Http\Requests\PatientProblemUpdateRequest;

class PatientProblemController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', PatientProblem::class);

        $search = $request->get('search', '');

        $patientProblems = PatientProblem::search($search)
            ->latest()
            ->paginate();

        return new PatientProblemCollection($patientProblems);
    }

    /**
     * @param \App\Http\Requests\PatientProblemStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientProblemStoreRequest $request)
    {
        $this->authorize('create', PatientProblem::class);

        $validated = $request->validated();

        $patientProblem = PatientProblem::create($validated);

        return new PatientProblemResource($patientProblem);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientProblem $patientProblem
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, PatientProblem $patientProblem)
    {
        $this->authorize('view', $patientProblem);

        return new PatientProblemResource($patientProblem);
    }

    /**
     * @param \App\Http\Requests\PatientProblemUpdateRequest $request
     * @param \App\Models\PatientProblem $patientProblem
     * @return \Illuminate\Http\Response
     */
    public function update(
        PatientProblemUpdateRequest $request,
        PatientProblem $patientProblem
    ) {
        $this->authorize('update', $patientProblem);

        $validated = $request->validated();

        $patientProblem->update($validated);

        return new PatientProblemResource($patientProblem);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientProblem $patientProblem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, PatientProblem $patientProblem)
    {
        $this->authorize('delete', $patientProblem);

        $patientProblem->delete();

        return response()->noContent();
    }
}
