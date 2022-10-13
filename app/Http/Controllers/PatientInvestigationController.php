<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\PatientInvestigation;
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
            ->paginate(5)
            ->withQueryString();

            /* var_dump($patientInvestigations);
            exit(); */

        return view(
            'app.patient_investigations.index',
            compact('patientInvestigations', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', PatientInvestigation::class);

        $patients = Patient::pluck('reg_no', 'id');

        return view('app.patient_investigations.create', compact('patients'));
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

        return redirect()
            ->route('patient-investigations.edit', $patientInvestigation)
            ->withSuccess(__('crud.common.created'));
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

        return view(
            'app.patient_investigations.show',
            compact('patientInvestigation')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientInvestigation $patientInvestigation
     * @return \Illuminate\Http\Response
     */
    public function edit(
        Request $request,
        PatientInvestigation $patientInvestigation
    ) {
        $this->authorize('update', $patientInvestigation);

        $patients = Patient::pluck('reg_no', 'id');

        return view(
            'app.patient_investigations.edit',
            compact('patientInvestigation', 'patients')
        );
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

        return redirect()
            ->route('patient-investigations.edit', $patientInvestigation)
            ->withSuccess(__('crud.common.saved'));
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

        return redirect()
            ->route('patient-investigations.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
