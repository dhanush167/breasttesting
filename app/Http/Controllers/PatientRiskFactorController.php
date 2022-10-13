<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\PatientRiskFactor;
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
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.patient_risk_factors.index',
            compact('patientRiskFactors', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', PatientRiskFactor::class);

        $patients = Patient::pluck('reg_no', 'id');

        return view('app.patient_risk_factors.create', compact('patients'));
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

        return redirect()
            ->route('patient-risk-factors.edit', $patientRiskFactor)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientRiskFactor $patientRiskFactor
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, PatientRiskFactor $patientRiskFactor)
    {
        $this->authorize('view', $patientRiskFactor);

        return view(
            'app.patient_risk_factors.show',
            compact('patientRiskFactor')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientRiskFactor $patientRiskFactor
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, PatientRiskFactor $patientRiskFactor)
    {
        $this->authorize('update', $patientRiskFactor);

        $patients = Patient::pluck('reg_no', 'id');

        return view(
            'app.patient_risk_factors.edit',
            compact('patientRiskFactor', 'patients')
        );
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

        return redirect()
            ->route('patient-risk-factors.edit', $patientRiskFactor)
            ->withSuccess(__('crud.common.saved'));
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

        return redirect()
            ->route('patient-risk-factors.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
