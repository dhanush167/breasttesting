<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\ExaminationFactor;
use App\Models\PatientExamination;
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
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.patient_examinations.index',
            compact('patientExaminations', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', PatientExamination::class);

        $patients = Patient::pluck('reg_no', 'id');
        $examinationFactors = ExaminationFactor::pluck('name', 'id');

        return view(
            'app.patient_examinations.create',
            compact('patients', 'examinationFactors')
        );
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

        return redirect()
            ->route('patient-examinations.edit', $patientExamination)
            ->withSuccess(__('crud.common.created'));
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

        return view(
            'app.patient_examinations.show',
            compact('patientExamination')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientExamination $patientExamination
     * @return \Illuminate\Http\Response
     */
    public function edit(
        Request $request,
        PatientExamination $patientExamination
    ) {
        $this->authorize('update', $patientExamination);

        $patients = Patient::pluck('reg_no', 'id');
        $examinationFactors = ExaminationFactor::pluck('name', 'id');

        return view(
            'app.patient_examinations.edit',
            compact('patientExamination', 'patients', 'examinationFactors')
        );
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

        return redirect()
            ->route('patient-examinations.edit', $patientExamination)
            ->withSuccess(__('crud.common.saved'));
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

        return redirect()
            ->route('patient-examinations.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
