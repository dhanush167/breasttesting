<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommonProblem;
use App\Http\Requests\CommonProblemStoreRequest;
use App\Http\Requests\CommonProblemUpdateRequest;

class CommonProblemController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', CommonProblem::class);

        $search = $request->get('search', '');

        $commonProblems = CommonProblem::search($search)
            ->latest()
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.common_problems.index',
            compact('commonProblems', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', CommonProblem::class);

        return view('app.common_problems.create');
    }

    /**
     * @param \App\Http\Requests\CommonProblemStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CommonProblemStoreRequest $request)
    {
        $this->authorize('create', CommonProblem::class);

        $validated = $request->validated();

        $commonProblem = CommonProblem::create($validated);

        return redirect()
            ->route('common-problems.edit', $commonProblem)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CommonProblem $commonProblem
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, CommonProblem $commonProblem)
    {
        $this->authorize('view', $commonProblem);

        return view('app.common_problems.show', compact('commonProblem'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CommonProblem $commonProblem
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, CommonProblem $commonProblem)
    {
        $this->authorize('update', $commonProblem);

        return view('app.common_problems.edit', compact('commonProblem'));
    }

    /**
     * @param \App\Http\Requests\CommonProblemUpdateRequest $request
     * @param \App\Models\CommonProblem $commonProblem
     * @return \Illuminate\Http\Response
     */
    public function update(
        CommonProblemUpdateRequest $request,
        CommonProblem $commonProblem
    ) {
        $this->authorize('update', $commonProblem);

        $validated = $request->validated();

        $commonProblem->update($validated);

        return redirect()
            ->route('common-problems.edit', $commonProblem)
            ->withSuccess(__('crud.common.saved'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CommonProblem $commonProblem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, CommonProblem $commonProblem)
    {
        $this->authorize('delete', $commonProblem);

        $commonProblem->delete();

        return redirect()
            ->route('common-problems.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
