<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UltraSoundScanFactor;
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
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.ultra_sound_scan_factors.index',
            compact('ultraSoundScanFactors', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', UltraSoundScanFactor::class);

        return view('app.ultra_sound_scan_factors.create');
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

        return redirect()
            ->route('ultra-sound-scan-factors.edit', $ultraSoundScanFactor)
            ->withSuccess(__('crud.common.created'));
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

        return view(
            'app.ultra_sound_scan_factors.show',
            compact('ultraSoundScanFactor')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\UltraSoundScanFactor $ultraSoundScanFactor
     * @return \Illuminate\Http\Response
     */
    public function edit(
        Request $request,
        UltraSoundScanFactor $ultraSoundScanFactor
    ) {
        $this->authorize('update', $ultraSoundScanFactor);

        return view(
            'app.ultra_sound_scan_factors.edit',
            compact('ultraSoundScanFactor')
        );
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

        return redirect()
            ->route('ultra-sound-scan-factors.edit', $ultraSoundScanFactor)
            ->withSuccess(__('crud.common.saved'));
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

        return redirect()
            ->route('ultra-sound-scan-factors.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
