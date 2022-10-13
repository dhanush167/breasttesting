<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\CancerType;
use Illuminate\Http\Request;
use App\Models\FamilyHistory;
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
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.family_histories.index',
            compact('familyHistories', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', FamilyHistory::class);

        $patients = Patient::pluck('reg_no', 'id');
        $cancerTypes = CancerType::pluck('name', 'id');

        return view(
            'app.family_histories.create',
            compact('patients', 'cancerTypes')
        );
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

        return redirect()
            ->route('family-histories.edit', $familyHistory)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\FamilyHistory $familyHistory
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, FamilyHistory $familyHistory)
    {
        $this->authorize('view', $familyHistory);

        return view('app.family_histories.show', compact('familyHistory'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\FamilyHistory $familyHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, FamilyHistory $familyHistory)
    {
        $this->authorize('update', $familyHistory);

        $patients = Patient::pluck('reg_no', 'id');
        $cancerTypes = CancerType::pluck('name', 'id');

        return view(
            'app.family_histories.edit',
            compact('familyHistory', 'patients', 'cancerTypes')
        );
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

        return redirect()
            ->route('family-histories.edit', $familyHistory)
            ->withSuccess(__('crud.common.saved'));
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

        return redirect()
            ->route('family-histories.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
