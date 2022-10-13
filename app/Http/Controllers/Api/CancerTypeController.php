<?php

namespace App\Http\Controllers\Api;

use App\Models\CancerType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CancerTypeResource;
use App\Http\Resources\CancerTypeCollection;
use App\Http\Requests\CancerTypeStoreRequest;
use App\Http\Requests\CancerTypeUpdateRequest;

class CancerTypeController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', CancerType::class);

        $search = $request->get('search', '');

        $cancerTypes = CancerType::search($search)
            ->latest()
            ->paginate();

        return new CancerTypeCollection($cancerTypes);
    }

    /**
     * @param \App\Http\Requests\CancerTypeStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CancerTypeStoreRequest $request)
    {
        $this->authorize('create', CancerType::class);

        $validated = $request->validated();

        $cancerType = CancerType::create($validated);

        return new CancerTypeResource($cancerType);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CancerType $cancerType
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, CancerType $cancerType)
    {
        $this->authorize('view', $cancerType);

        return new CancerTypeResource($cancerType);
    }

    /**
     * @param \App\Http\Requests\CancerTypeUpdateRequest $request
     * @param \App\Models\CancerType $cancerType
     * @return \Illuminate\Http\Response
     */
    public function update(
        CancerTypeUpdateRequest $request,
        CancerType $cancerType
    ) {
        $this->authorize('update', $cancerType);

        $validated = $request->validated();

        $cancerType->update($validated);

        return new CancerTypeResource($cancerType);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CancerType $cancerType
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, CancerType $cancerType)
    {
        $this->authorize('delete', $cancerType);

        $cancerType->delete();

        return response()->noContent();
    }
}
