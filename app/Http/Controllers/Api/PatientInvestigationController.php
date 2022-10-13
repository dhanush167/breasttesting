<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\PatientInvestigation;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatientInvestigationResource;
use App\Http\Resources\PatientInvestigationCollection;
use App\Http\Requests\PatientInvestigationStoreRequest;
use App\Http\Requests\PatientInvestigationUpdateRequest;

class PatientInvestigationController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', PatientInvestigation::class);

        $search = $request->get('search', '');

        $patientInvestigations = PatientInvestigation::search($search)
            ->latest()
            ->paginate();

        return new PatientInvestigationCollection($patientInvestigations);
    }

    /**
     * @param \App\Http\Requests\PatientInvestigationStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientInvestigationStoreRequest $request)
    {
        $this->authorize('create', PatientInvestigation::class);

        $validated = $request->validated();

        $patientInvestigation = PatientInvestigation::create($validated);

        return new PatientInvestigationResource($patientInvestigation);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientInvestigation $patientInvestigation
     * @return \Illuminate\Http\Response
     */
    public function show(
        Request $request,
        PatientInvestigation $patientInvestigation
    ) {
        $this->authorize('view', $patientInvestigation);

        return new PatientInvestigationResource($patientInvestigation);
    }

    /**
     * @param \App\Http\Requests\PatientInvestigationUpdateRequest $request
     * @param \App\Models\PatientInvestigation $patientInvestigation
     * @return \Illuminate\Http\Response
     */
    public function update(
        PatientInvestigationUpdateRequest $request,
        PatientInvestigation $patientInvestigation
    ) {
        $this->authorize('update', $patientInvestigation);

        $validated = $request->validated();

        $patientInvestigation->update($validated);

        return new PatientInvestigationResource($patientInvestigation);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientInvestigation $patientInvestigation
     * @return \Illuminate\Http\Response
     */
    public function destroy(
        Request $request,
        PatientInvestigation $patientInvestigation
    ) {
        $this->authorize('delete', $patientInvestigation);

        $patientInvestigation->delete();

        return response()->noContent();
    }
}
