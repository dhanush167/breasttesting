<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\PatienFollowup;
use App\Models\FollowupReason;
use App\Http\Requests\PatienFollowupStoreRequest;
use App\Http\Requests\PatienFollowupUpdateRequest;

class PatienFollowupController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', PatienFollowup::class);

        $search = $request->get('search', '');

        $patienFollowups = PatienFollowup::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.patien_followups.index',
            compact('patienFollowups', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', PatienFollowup::class);

        $patients = Patient::pluck('reg_no', 'id');
        $followupReasons = FollowupReason::pluck('id', 'id');

        return view(
            'app.patien_followups.create',
            compact('patients', 'followupReasons')
        );
    }

    /**
     * @param \App\Http\Requests\PatienFollowupStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatienFollowupStoreRequest $request)
    {
        $this->authorize('create', PatienFollowup::class);

        $validated = $request->validated();

        $patienFollowup = PatienFollowup::create($validated);

        return redirect()
            ->route('patien-followups.edit', $patienFollowup)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatienFollowup $patienFollowup
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, PatienFollowup $patienFollowup)
    {
        $this->authorize('view', $patienFollowup);

        return view('app.patien_followups.show', compact('patienFollowup'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatienFollowup $patienFollowup
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, PatienFollowup $patienFollowup)
    {
        $this->authorize('update', $patienFollowup);

        $patients = Patient::pluck('reg_no', 'id');
        $followupReasons = FollowupReason::pluck('id', 'id');

        return view(
            'app.patien_followups.edit',
            compact('patienFollowup', 'patients', 'followupReasons')
        );
    }

    /**
     * @param \App\Http\Requests\PatienFollowupUpdateRequest $request
     * @param \App\Models\PatienFollowup $patienFollowup
     * @return \Illuminate\Http\Response
     */
    public function update(
        PatienFollowupUpdateRequest $request,
        PatienFollowup $patienFollowup
    ) {
        $this->authorize('update', $patienFollowup);

        $validated = $request->validated();

        $patienFollowup->update($validated);

        return redirect()
            ->route('patien-followups.edit', $patienFollowup)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatienFollowup $patienFollowup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, PatienFollowup $patienFollowup)
    {
        $this->authorize('delete', $patienFollowup);

        $patienFollowup->delete();

        return redirect()
            ->route('patien-followups.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
