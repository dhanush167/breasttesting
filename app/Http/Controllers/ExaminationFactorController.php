<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExaminationFactor;
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
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.examination_factors.index',
            compact('examinationFactors', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', ExaminationFactor::class);

        return view('app.examination_factors.create');
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

        return redirect()
            ->route('examination-factors.edit', $examinationFactor)
            ->withSuccess(__('crud.common.created'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ExaminationFactor $examinationFactor
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ExaminationFactor $examinationFactor)
    {
        $this->authorize('view', $examinationFactor);

        return view(
            'app.examination_factors.show',
            compact('examinationFactor')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ExaminationFactor $examinationFactor
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ExaminationFactor $examinationFactor)
    {
        $this->authorize('update', $examinationFactor);

        return view(
            'app.examination_factors.edit',
            compact('examinationFactor')
        );
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

        return redirect()
            ->route('examination-factors.edit', $examinationFactor)
            ->withSuccess(__('crud.common.saved'));
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

        return redirect()
            ->route('examination-factors.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
