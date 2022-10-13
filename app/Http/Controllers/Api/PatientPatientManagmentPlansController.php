<?php

namespace App\Http\Controllers\Api;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatientManagmentPlanResource;
use App\Http\Resources\PatientManagmentPlanCollection;

class PatientPatientManagmentPlansController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Patient $patient)
    {
        $this->authorize('view', $patient);

        $search = $request->get('search', '');

        $patientManagmentPlans = $patient
            ->patientManagmentPlans()
            ->search($search)
            ->latest()
            ->paginate();

        return new PatientManagmentPlanCollection($patientManagmentPlans);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Patient $patient)
    {
        $this->authorize('create', PatientManagmentPlan::class);

        $validated = $request->validate([
            'checklist_id' => ['required', 'exists:checklists,id'],
            'date' => ['required', 'date'],
        ]);

        $patientManagmentPlan = $patient
            ->patientManagmentPlans()
            ->create($validated);

        return new PatientManagmentPlanResource($patientManagmentPlan);
    }
}
