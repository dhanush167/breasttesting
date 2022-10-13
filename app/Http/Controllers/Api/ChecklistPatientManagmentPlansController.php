<?php

namespace App\Http\Controllers\Api;

use App\Models\Checklist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatientManagmentPlanResource;
use App\Http\Resources\PatientManagmentPlanCollection;

class ChecklistPatientManagmentPlansController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Checklist $checklist
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Checklist $checklist)
    {
        $this->authorize('view', $checklist);

        $search = $request->get('search', '');

        $patientManagmentPlans = $checklist
            ->patientManagmentPlans()
            ->search($search)
            ->latest()
            ->paginate();

        return new PatientManagmentPlanCollection($patientManagmentPlans);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Checklist $checklist
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Checklist $checklist)
    {
        $this->authorize('create', PatientManagmentPlan::class);

        $validated = $request->validate([
            'patient_id' => ['required', 'exists:patients,id'],
            'date' => ['required', 'date'],
        ]);

        $patientManagmentPlan = $checklist
            ->patientManagmentPlans()
            ->create($validated);

        return new PatientManagmentPlanResource($patientManagmentPlan);
    }
}
