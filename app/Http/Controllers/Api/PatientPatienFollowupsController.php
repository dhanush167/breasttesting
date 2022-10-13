<?php

namespace App\Http\Controllers\Api;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatienFollowupResource;
use App\Http\Resources\PatienFollowupCollection;

class PatientPatienFollowupsController extends Controller
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

        $patienFollowups = $patient
            ->patienFollowups()
            ->search($search)
            ->latest()
            ->paginate();

        return new PatienFollowupCollection($patienFollowups);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Patient $patient)
    {
        $this->authorize('create', PatienFollowup::class);

        $validated = $request->validate([
            'followup_reason_id' => ['required', 'exists:followup_reasons,id'],
            'other_comments' => ['nullable', 'string'],
            'date' => ['required', 'date'],
        ]);

        $patienFollowup = $patient->patienFollowups()->create($validated);

        return new PatienFollowupResource($patienFollowup);
    }
}
