<?php

namespace App\Http\Controllers;

use App\Models\CancerType;
use Illuminate\Http\Request;
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
            ->paginate(5)
            ->withQueryString();

        return view('app.cancer_types.index', compact('cancerTypes', 'search'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', CancerType::class);

        return view('app.cancer_types.create');
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

        return redirect()
            ->route('cancer-types.edit', $cancerType)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CancerType $cancerType
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, CancerType $cancerType)
    {
        $this->authorize('view', $cancerType);

        return view('app.cancer_types.show', compact('cancerType'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\CancerType $cancerType
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, CancerType $cancerType)
    {
        $this->authorize('update', $cancerType);

        return view('app.cancer_types.edit', compact('cancerType'));
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

        return redirect()
            ->route('cancer-types.edit', $cancerType)
            ->withSuccess(__('crud.common.saved'));
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

        return redirect()
            ->route('cancer-types.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
