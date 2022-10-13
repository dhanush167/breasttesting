<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\PatientManagmentPlan;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatientManagmentPlanResource;
use App\Http\Resources\PatientManagmentPlanCollection;
use App\Http\Requests\PatientManagmentPlanStoreRequest;
use App\Http\Requests\PatientManagmentPlanUpdateRequest;

class PatientManagmentPlanController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', PatientManagmentPlan::class);

        $search = $request->get('search', '');

        $patientManagmentPlans = PatientManagmentPlan::search($search)
            ->latest()
            ->paginate();

        return new PatientManagmentPlanCollection($patientManagmentPlans);
    }

    /**
     * @param \App\Http\Requests\PatientManagmentPlanStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientManagmentPlanStoreRequest $request)
    {
        $this->authorize('create', PatientManagmentPlan::class);

        $validated = $request->validated();

        $patientManagmentPlan = PatientManagmentPlan::create($validated);

        return new PatientManagmentPlanResource($patientManagmentPlan);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientManagmentPlan $patientManagmentPlan
     * @return \Illuminate\Http\Response
     */
    public function show(
        Request $request,
        PatientManagmentPlan $patientManagmentPlan
    ) {
        $this->authorize('view', $patientManagmentPlan);

        return new PatientManagmentPlanResource($patientManagmentPlan);
    }

    /**
     * @param \App\Http\Requests\PatientManagmentPlanUpdateRequest $request
     * @param \App\Models\PatientManagmentPlan $patientManagmentPlan
     * @return \Illuminate\Http\Response
     */
    public function update(
        PatientManagmentPlanUpdateRequest $request,
        PatientManagmentPlan $patientManagmentPlan
    ) {
        $this->authorize('update', $patientManagmentPlan);

        $validated = $request->validated();

        $patientManagmentPlan->update($validated);

        return new PatientManagmentPlanResource($patientManagmentPlan);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientManagmentPlan $patientManagmentPlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(
        Request $request,
        PatientManagmentPlan $patientManagmentPlan
    ) {
        $this->authorize('delete', $patientManagmentPlan);

        $patientManagmentPlan->delete();

        return response()->noContent();
    }
}
