<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\PatienFollowup;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatienFollowupResource;
use App\Http\Resources\PatienFollowupCollection;
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
            ->paginate();

        return new PatienFollowupCollection($patienFollowups);
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

        return new PatienFollowupResource($patienFollowup);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatienFollowup $patienFollowup
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, PatienFollowup $patienFollowup)
    {
        $this->authorize('view', $patienFollowup);

        return new PatienFollowupResource($patienFollowup);
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

        return new PatienFollowupResource($patienFollowup);
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

        return response()->noContent();
    }
}
