<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\UltraSoundScanFactor;
use App\Http\Controllers\Controller;
use App\Http\Resources\UltraSoundScanFactorResource;
use App\Http\Resources\UltraSoundScanFactorCollection;
use App\Http\Requests\UltraSoundScanFactorStoreRequest;
use App\Http\Requests\UltraSoundScanFactorUpdateRequest;

class UltraSoundScanFactorController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', UltraSoundScanFactor::class);

        $search = $request->get('search', '');

        $ultraSoundScanFactors = UltraSoundScanFactor::search($search)
            ->latest()
            ->paginate();

        return new UltraSoundScanFactorCollection($ultraSoundScanFactors);
    }

    /**
     * @param \App\Http\Requests\UltraSoundScanFactorStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(UltraSoundScanFactorStoreRequest $request)
    {
        $this->authorize('create', UltraSoundScanFactor::class);

        $validated = $request->validated();

        $ultraSoundScanFactor = UltraSoundScanFactor::create($validated);

        return new UltraSoundScanFactorResource($ultraSoundScanFactor);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\UltraSoundScanFactor $ultraSoundScanFactor
     * @return \Illuminate\Http\Response
     */
    public function show(
        Request $request,
        UltraSoundScanFactor $ultraSoundScanFactor
    ) {
        $this->authorize('view', $ultraSoundScanFactor);

        return new UltraSoundScanFactorResource($ultraSoundScanFactor);
    }

    /**
     * @param \App\Http\Requests\UltraSoundScanFactorUpdateRequest $request
     * @param \App\Models\UltraSoundScanFactor $ultraSoundScanFactor
     * @return \Illuminate\Http\Response
     */
    public function update(
        UltraSoundScanFactorUpdateRequest $request,
        UltraSoundScanFactor $ultraSoundScanFactor
    ) {
        $this->authorize('update', $ultraSoundScanFactor);

        $validated = $request->validated();

        $ultraSoundScanFactor->update($validated);

        return new UltraSoundScanFactorResource($ultraSoundScanFactor);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\UltraSoundScanFactor $ultraSoundScanFactor
     * @return \Illuminate\Http\Response
     */
    public function destroy(
        Request $request,
        UltraSoundScanFactor $ultraSoundScanFactor
    ) {
        $this->authorize('delete', $ultraSoundScanFactor);

        $ultraSoundScanFactor->delete();

        return response()->noContent();
    }
}
