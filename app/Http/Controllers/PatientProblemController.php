<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\CommonProblem;
use App\Models\PatientProblem;
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
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.patient_problems.index',
            compact('patientProblems', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', PatientProblem::class);

        $patients = Patient::pluck('reg_no', 'id');
        $commonProblems = CommonProblem::pluck('short_code', 'id');

        return view(
            'app.patient_problems.create',
            compact('patients', 'commonProblems')
        );
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

        return redirect()
            ->route('patient-problems.edit', $patientProblem)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientProblem $patientProblem
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, PatientProblem $patientProblem)
    {
        $this->authorize('view', $patientProblem);

        return view('app.patient_problems.show', compact('patientProblem'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientProblem $patientProblem
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, PatientProblem $patientProblem)
    {
        $this->authorize('update', $patientProblem);

        $patients = Patient::pluck('reg_no', 'id');
        $commonProblems = CommonProblem::pluck('short_code', 'id');

        return view(
            'app.patient_problems.edit',
            compact('patientProblem', 'patients', 'commonProblems')
        );
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

        return redirect()
            ->route('patient-problems.edit', $patientProblem)
            ->withSuccess(__('crud.common.saved'));
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

        return redirect()
            ->route('patient-problems.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
