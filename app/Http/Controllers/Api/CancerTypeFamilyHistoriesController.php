<?php

namespace App\Http\Controllers\Api;

use App\Models\CancerType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\FamilyHistoryResource;
use App\Http\Resources\FamilyHistoryCollection;

class CancerTypeFamilyHistoriesController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CancerType $cancerType
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, CancerType $cancerType)
    {
        $this->authorize('view', $cancerType);

        $search = $request->get('search', '');

        $familyHistories = $cancerType
            ->familyHistories()
            ->search($search)
            ->latest()
            ->paginate();

        return new FamilyHistoryCollection($familyHistories);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CancerType $cancerType
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, CancerType $cancerType)
    {
        $this->authorize('create', FamilyHistory::class);

        $validated = $request->validate([
            'patient_id' => ['exists:patients,id', 'nullable'],
            'degree' => ['nullable', 'max:255', 'string'],
            'number_of_relative' => ['nullable', 'numeric'],
        ]);

        $familyHistory = $cancerType->familyHistories()->create($validated);

        return new FamilyHistoryResource($familyHistory);
    }
}
