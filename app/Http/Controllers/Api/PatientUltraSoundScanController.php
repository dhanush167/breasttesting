<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PatientUltraSoundScan;
use App\Http\Resources\PatientUltraSoundScanResource;
use App\Http\Resources\PatientUltraSoundScanCollection;
use App\Http\Requests\PatientUltraSoundScanStoreRequest;
use App\Http\Requests\PatientUltraSoundScanUpdateRequest;

class PatientUltraSoundScanController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->authorize('view-any', PatientUltraSoundScan::class);

        $search = $request->get('search', '');

        $patientUltraSoundScans = PatientUltraSoundScan::search($search)
            ->latest()
            ->paginate();

        return new PatientUltraSoundScanCollection($patientUltraSoundScans);
    }

    /**
     * @param \App\Http\Requests\PatientUltraSoundScanStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PatientUltraSoundScanStoreRequest $request)
    {
        $this->authorize('create', PatientUltraSoundScan::class);

        $validated = $request->validated();

        $patientUltraSoundScan = PatientUltraSoundScan::create($validated);

        return new PatientUltraSoundScanResource($patientUltraSoundScan);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientUltraSoundScan $patientUltraSoundScan
     * @return \Illuminate\Http\Response
     */
    public function show(
        Request $request,
        PatientUltraSoundScan $patientUltraSoundScan
    ) {
        $this->authorize('view', $patientUltraSoundScan);

        return new PatientUltraSoundScanResource($patientUltraSoundScan);
    }

    /**
     * @param \App\Http\Requests\PatientUltraSoundScanUpdateRequest $request
     * @param \App\Models\PatientUltraSoundScan $patientUltraSoundScan
     * @return \Illuminate\Http\Response
     */
    public function update(
        PatientUltraSoundScanUpdateRequest $request,
        PatientUltraSoundScan $patientUltraSoundScan
    ) {
        $this->authorize('update', $patientUltraSoundScan);

        $validated = $request->validated();

        $patientUltraSoundScan->update($validated);

        return new PatientUltraSoundScanResource($patientUltraSoundScan);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientUltraSoundScan $patientUltraSoundScan
     * @return \Illuminate\Http\Response
     */
    public function destroy(
        Request $request,
        PatientUltraSoundScan $patientUltraSoundScan
    ) {
        $this->authorize('delete', $patientUltraSoundScan);

        $patientUltraSoundScan->delete();

        return response()->noContent();
    }
}
