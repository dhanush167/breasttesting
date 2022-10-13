<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\PatientRiskFactor;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatientRiskFactorResource;
use App\Http\Resources\PatientRiskFactorCollection;
use App\Http\Requests\PatientRiskFactorStoreRequest;
use App\Http\Requests\PatientRiskFactorUpdateRequest;

class PatientRiskFactorController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', PatientRiskFactor::class);

        $search = $request->get('search', '');

        $patientRiskFactors = PatientRiskFactor::search($search)
            ->latest()
            ->paginate();

        return new PatientRiskFactorCollection($patientRiskFactors);
    }

    /**
     * @param \App\Http\Requests\PatientRiskFactorStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientRiskFactorStoreRequest $request)
    {
        $this->authorize('create', PatientRiskFactor::class);

        $validated = $request->validated();

        $patientRiskFactor = PatientRiskFactor::create($validated);

        return new PatientRiskFactorResource($patientRiskFactor);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientRiskFactor $patientRiskFactor
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, PatientRiskFactor $patientRiskFactor)
    {
        $this->authorize('view', $patientRiskFactor);

        return new PatientRiskFactorResource($patientRiskFactor);
    }

    /**
     * @param \App\Http\Requests\PatientRiskFactorUpdateRequest $request
     * @param \App\Models\PatientRiskFactor $patientRiskFactor
     * @return \Illuminate\Http\Response
     */
    public function update(
        PatientRiskFactorUpdateRequest $request,
        PatientRiskFactor $patientRiskFactor
    ) {
        $this->authorize('update', $patientRiskFactor);

        $validated = $request->validated();

        $patientRiskFactor->update($validated);

        return new PatientRiskFactorResource($patientRiskFactor);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientRiskFactor $patientRiskFactor
     * @return \Illuminate\Http\Response
     */
    public function destroy(
        Request $request,
        PatientRiskFactor $patientRiskFactor
    ) {
        $this->authorize('delete', $patientRiskFactor);

        $patientRiskFactor->delete();

        return response()->noContent();
    }
}
