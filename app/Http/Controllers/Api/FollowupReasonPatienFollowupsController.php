<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\FollowupReason;
use App\Http\Controllers\Controller;
use App\Http\Resources\PatienFollowupResource;
use App\Http\Resources\PatienFollowupCollection;

class FollowupReasonPatienFollowupsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\FollowupReason $followupReason
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, FollowupReason $followupReason)
    {
        $this->authorize('view', $followupReason);

        $search = $request->get('search', '');

        $patienFollowups = $followupReason
            ->patienFollowups()
            ->search($search)
            ->latest()
            ->paginate();

        return new PatienFollowupCollection($patienFollowups);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\FollowupReason $followupReason
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, FollowupReason $followupReason)
    {
        $this->authorize('create', PatienFollowup::class);

        $validated = $request->validate([
            'patient_id' => ['required', 'exists:patients,id'],
            'other_comments' => ['nullable', 'string'],
            'date' => ['required', 'date'],
        ]);

        $patienFollowup = $followupReason
            ->patienFollowups()
            ->create($validated);

        return new PatienFollowupResource($patienFollowup);
    }
}
