<?php

namespace App\Http\Controllers\Api;

use App\Models\Checklist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ChecklistResource;
use App\Http\Resources\ChecklistCollection;
use App\Http\Requests\ChecklistStoreRequest;
use App\Http\Requests\ChecklistUpdateRequest;

class ChecklistController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', Checklist::class);

        $search = $request->get('search', '');

        $checklists = Checklist::search($search)
            ->latest()
            ->paginate();

        return new ChecklistCollection($checklists);
    }

    /**
     * @param \App\Http\Requests\ChecklistStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChecklistStoreRequest $request)
    {
        $this->authorize('create', Checklist::class);

        $validated = $request->validated();

        $checklist = Checklist::create($validated);

        return new ChecklistResource($checklist);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Checklist $checklist
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Checklist $checklist)
    {
        $this->authorize('view', $checklist);

        return new ChecklistResource($checklist);
    }

    /**
     * @param \App\Http\Requests\ChecklistUpdateRequest $request
     * @param \App\Models\Checklist $checklist
     * @return \Illuminate\Http\Response
     */
    public function update(
        ChecklistUpdateRequest $request,
        Checklist $checklist
    ) {
        $this->authorize('update', $checklist);

        $validated = $request->validated();

        $checklist->update($validated);

        return new ChecklistResource($checklist);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Checklist $checklist
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Checklist $checklist)
    {
        $this->authorize('delete', $checklist);

        $checklist->delete();

        return response()->noContent();
    }
}
