<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FollowupReason;
use App\Http\Requests\FollowupReasonStoreRequest;
use App\Http\Requests\FollowupReasonUpdateRequest;

class FollowupReasonController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', FollowupReason::class);

        $search = $request->get('search', '');

        $followupReasons = FollowupReason::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.followup_reasons.index',
            compact('followupReasons', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', FollowupReason::class);

        return view('app.followup_reasons.create');
    }

    /**
     * @param \App\Http\Requests\FollowupReasonStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(FollowupReasonStoreRequest $request)
    {
        $this->authorize('create', FollowupReason::class);

        $validated = $request->validated();

        $followupReason = FollowupReason::create($validated);

        return redirect()
            ->route('followup-reasons.edit', $followupReason)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\FollowupReason $followupReason
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, FollowupReason $followupReason)
    {
        $this->authorize('view', $followupReason);

        return view('app.followup_reasons.show', compact('followupReason'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\FollowupReason $followupReason
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, FollowupReason $followupReason)
    {
        $this->authorize('update', $followupReason);

        return view('app.followup_reasons.edit', compact('followupReason'));
    }

    /**
     * @param \App\Http\Requests\FollowupReasonUpdateRequest $request
     * @param \App\Models\FollowupReason $followupReason
     * @return \Illuminate\Http\Response
     */
    public function update(
        FollowupReasonUpdateRequest $request,
        FollowupReason $followupReason
    ) {
        $this->authorize('update', $followupReason);

        $validated = $request->validated();

        $followupReason->update($validated);

        return redirect()
            ->route('followup-reasons.edit', $followupReason)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\FollowupReason $followupReason
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, FollowupReason $followupReason)
    {
        $this->authorize('delete', $followupReason);

        $followupReason->delete();

        return redirect()
            ->route('followup-reasons.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
