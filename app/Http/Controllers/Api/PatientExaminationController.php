<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\PatientExamination;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatientExaminationResource;
use App\Http\Resources\PatientExaminationCollection;
use App\Http\Requests\PatientExaminationStoreRequest;
use App\Http\Requests\PatientExaminationUpdateRequest;

class PatientExaminationController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', PatientExamination::class);

        $search = $request->get('search', '');

        $patientExaminations = PatientExamination::search($search)
            ->latest()
            ->paginate();

        return new PatientExaminationCollection($patientExaminations);
    }

    /**
     * @param \App\Http\Requests\PatientExaminationStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientExaminationStoreRequest $request)
    {
        $this->authorize('create', PatientExamination::class);

        $validated = $request->validated();

        $patientExamination = PatientExamination::create($validated);

        return new PatientExaminationResource($patientExamination);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientExamination $patientExamination
     * @return \Illuminate\Http\Response
     */
    public function show(
        Request $request,
        PatientExamination $patientExamination
    ) {
        $this->authorize('view', $patientExamination);

        return new PatientExaminationResource($patientExamination);
    }

    /**
     * @param \App\Http\Requests\PatientExaminationUpdateRequest $request
     * @param \App\Models\PatientExamination $patientExamination
     * @return \Illuminate\Http\Response
     */
    public function update(
        PatientExaminationUpdateRequest $request,
        PatientExamination $patientExamination
    ) {
        $this->authorize('update', $patientExamination);

        $validated = $request->validated();

        $patientExamination->update($validated);

        return new PatientExaminationResource($patientExamination);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientExamination $patientExamination
     * @return \Illuminate\Http\Response
     */
    public function destroy(
        Request $request,
        PatientExamination $patientExamination
    ) {
        $this->authorize('delete', $patientExamination);

        $patientExamination->delete();

        return response()->noContent();
    }
}
