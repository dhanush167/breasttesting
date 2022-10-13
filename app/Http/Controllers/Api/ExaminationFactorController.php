<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\ExaminationFactor;
use App\Http\Controllers\Controller;
use App\Http\Resources\ExaminationFactorResource;
use App\Http\Resources\ExaminationFactorCollection;
use App\Http\Requests\ExaminationFactorStoreRequest;
use App\Http\Requests\ExaminationFactorUpdateRequest;

class ExaminationFactorController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', ExaminationFactor::class);

        $search = $request->get('search', '');

        $examinationFactors = ExaminationFactor::search($search)
            ->latest()
            ->paginate();

        return new ExaminationFactorCollection($examinationFactors);
    }

    /**
     * @param \App\Http\Requests\ExaminationFactorStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExaminationFactorStoreRequest $request)
    {
        $this->authorize('create', ExaminationFactor::class);

        $validated = $request->validated();

        $examinationFactor = ExaminationFactor::create($validated);

        return new ExaminationFactorResource($examinationFactor);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ExaminationFactor $examinationFactor
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ExaminationFactor $examinationFactor)
    {
        $this->authorize('view', $examinationFactor);

        return new ExaminationFactorResource($examinationFactor);
    }

    /**
     * @param \App\Http\Requests\ExaminationFactorUpdateRequest $request
     * @param \App\Models\ExaminationFactor $examinationFactor
     * @return \Illuminate\Http\Response
     */
    public function update(
        ExaminationFactorUpdateRequest $request,
        ExaminationFactor $examinationFactor
    ) {
        $this->authorize('update', $examinationFactor);

        $validated = $request->validated();

        $examinationFactor->update($validated);

        return new ExaminationFactorResource($examinationFactor);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ExaminationFactor $examinationFactor
     * @return \Illuminate\Http\Response
     */
    public function destroy(
        Request $request,
        ExaminationFactor $examinationFactor
    ) {
        $this->authorize('delete', $examinationFactor);

        $examinationFactor->delete();

        return response()->noContent();
    }
}
