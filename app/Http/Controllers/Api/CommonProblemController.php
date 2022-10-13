<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\CommonProblem;
use App\Http\Controllers\Controller;
use App\Http\Resources\CommonProblemResource;
use App\Http\Resources\CommonProblemCollection;
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
            ->paginate();

        return new CommonProblemCollection($commonProblems);
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

        return new CommonProblemResource($commonProblem);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CommonProblem $commonProblem
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, CommonProblem $commonProblem)
    {
        $this->authorize('view', $commonProblem);

        return new CommonProblemResource($commonProblem);
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

        return new CommonProblemResource($commonProblem);
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

        return response()->noContent();
    }
}
