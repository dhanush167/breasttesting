<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\Checklist;
use Illuminate\Http\Request;
use App\Models\PatientManagmentPlan;
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
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.patient_managment_plans.index',
            compact('patientManagmentPlans', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', PatientManagmentPlan::class);

        $checklists = Checklist::pluck('name', 'id');
        $patients = Patient::pluck('reg_no', 'id');

        return view(
            'app.patient_managment_plans.create',
            compact('checklists', 'patients')
        );
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

        return redirect()
            ->route('patient-managment-plans.edit', $patientManagmentPlan)
            ->withSuccess(__('crud.common.created'));
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

        return view(
            'app.patient_managment_plans.show',
            compact('patientManagmentPlan')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientManagmentPlan $patientManagmentPlan
     * @return \Illuminate\Http\Response
     */
    public function edit(
        Request $request,
        PatientManagmentPlan $patientManagmentPlan
    ) {
        $this->authorize('update', $patientManagmentPlan);

        $checklists = Checklist::pluck('name', 'id');
        $patients = Patient::pluck('reg_no', 'id');

        return view(
            'app.patient_managment_plans.edit',
            compact('patientManagmentPlan', 'checklists', 'patients')
        );
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

        return redirect()
            ->route('patient-managment-plans.edit', $patientManagmentPlan)
            ->withSuccess(__('crud.common.saved'));
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

        return redirect()
            ->route('patient-managment-plans.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
