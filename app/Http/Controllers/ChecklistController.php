<?php

namespace App\Http\Controllers;

use App\Models\Checklist;
use Illuminate\Http\Request;
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
            ->paginate(5)
            ->withQueryString();

        return view('app.checklists.index', compact('checklists', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', Checklist::class);

        return view('app.checklists.create');
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

        return redirect()
            ->route('checklists.edit', $checklist)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Checklist $checklist
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Checklist $checklist)
    {
        $this->authorize('view', $checklist);

        return view('app.checklists.show', compact('checklist'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Checklist $checklist
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Checklist $checklist)
    {
        $this->authorize('update', $checklist);

        return view('app.checklists.edit', compact('checklist'));
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

        return redirect()
            ->route('checklists.edit', $checklist)
            ->withSuccess(__('crud.common.saved'));
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

        return redirect()
            ->route('checklists.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
