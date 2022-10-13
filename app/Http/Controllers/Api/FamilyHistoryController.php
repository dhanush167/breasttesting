<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\FamilyHistory;
use App\Http\Controllers\Controller;
use App\Http\Resources\FamilyHistoryResource;
use App\Http\Resources\FamilyHistoryCollection;
use App\Http\Requests\FamilyHistoryStoreRequest;
use App\Http\Requests\FamilyHistoryUpdateRequest;

class FamilyHistoryController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', FamilyHistory::class);

        $search = $request->get('search', '');

        $familyHistories = FamilyHistory::search($search)
            ->latest()
            ->paginate();

        return new FamilyHistoryCollection($familyHistories);
    }

    /**
     * @param \App\Http\Requests\FamilyHistoryStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(FamilyHistoryStoreRequest $request)
    {
        $this->authorize('create', FamilyHistory::class);

        $validated = $request->validated();

        $familyHistory = FamilyHistory::create($validated);

        return new FamilyHistoryResource($familyHistory);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\FamilyHistory $familyHistory
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, FamilyHistory $familyHistory)
    {
        $this->authorize('view', $familyHistory);

        return new FamilyHistoryResource($familyHistory);
    }

    /**
     * @param \App\Http\Requests\FamilyHistoryUpdateRequest $request
     * @param \App\Models\FamilyHistory $familyHistory
     * @return \Illuminate\Http\Response
     */
    public function update(
        FamilyHistoryUpdateRequest $request,
        FamilyHistory $familyHistory
    ) {
        $this->authorize('update', $familyHistory);

        $validated = $request->validated();

        $familyHistory->update($validated);

        return new FamilyHistoryResource($familyHistory);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\FamilyHistory $familyHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, FamilyHistory $familyHistory)
    {
        $this->authorize('delete', $familyHistory);

        $familyHistory->delete();

        return response()->noContent();
    }
}
