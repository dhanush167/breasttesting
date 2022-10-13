<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\FollowupReason;
use App\Http\Controllers\Controller;
use App\Http\Resources\FollowupReasonResource;
use App\Http\Resources\FollowupReasonCollection;
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
            ->paginate();

        return new FollowupReasonCollection($followupReasons);
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

        return new FollowupReasonResource($followupReason);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\FollowupReason $followupReason
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, FollowupReason $followupReason)
    {
        $this->authorize('view', $followupReason);

        return new FollowupReasonResource($followupReason);
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

        return new FollowupReasonResource($followupReason);
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

        return response()->noContent();
    }
}
