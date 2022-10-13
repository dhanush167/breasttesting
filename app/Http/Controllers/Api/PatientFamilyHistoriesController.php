<?php

namespace App\Http\Controllers\Api;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\FamilyHistoryResource;
use App\Http\Resources\FamilyHistoryCollection;

class PatientFamilyHistoriesController extends Controller
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

        $familyHistories = $patient
            ->familyHistories()
            ->search($search)
            ->latest()
            ->paginate();

        return new FamilyHistoryCollection($familyHistories);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Patient $patient
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Patient $patient)
    {
        $this->authorize('create', FamilyHistory::class);

        $validated = $request->validate([
            'cancer_type_id' => ['exists:cancer_types,id', 'nullable'],
            'degree' => ['nullable', 'max:255', 'string'],
            'number_of_relative' => ['nullable', 'numeric'],
        ]);

        $familyHistory = $patient->familyHistories()->create($validated);

        return new FamilyHistoryResource($familyHistory);
    }
}
