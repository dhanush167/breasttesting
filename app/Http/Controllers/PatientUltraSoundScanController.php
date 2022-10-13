<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use App\Models\UltraSoundScanFactor;
use App\Models\PatientUltraSoundScan;
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
            ->paginate(5)
            ->withQueryString();

        return view(
            'app.patient_ultra_sound_scans.index',
            compact('patientUltraSoundScans', 'search')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->authorize('create', PatientUltraSoundScan::class);

        $patients = Patient::pluck('reg_no', 'id');
        $ultraSoundScanFactors = UltraSoundScanFactor::pluck('name', 'id');

        return view(
            'app.patient_ultra_sound_scans.create',
            compact('patients', 'ultraSoundScanFactors')
        );
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

        return redirect()
            ->route('patient-ultra-sound-scans.edit', $patientUltraSoundScan)
            ->withSuccess(__('crud.common.created'));
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

        return view(
            'app.patient_ultra_sound_scans.show',
            compact('patientUltraSoundScan')
        );
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\PatientUltraSoundScan $patientUltraSoundScan
     * @return \Illuminate\Http\Response
     */
    public function edit(
        Request $request,
        PatientUltraSoundScan $patientUltraSoundScan
    ) {
        $this->authorize('update', $patientUltraSoundScan);

        $patients = Patient::pluck('reg_no', 'id');
        $ultraSoundScanFactors = UltraSoundScanFactor::pluck('name', 'id');

        return view(
            'app.patient_ultra_sound_scans.edit',
            compact(
                'patientUltraSoundScan',
                'patients',
                'ultraSoundScanFactors'
            )
        );
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

        return redirect()
            ->route('patient-ultra-sound-scans.edit', $patientUltraSoundScan)
            ->withSuccess(__('crud.common.saved'));
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

        return redirect()
            ->route('patient-ultra-sound-scans.index')
            ->withSuccess(__('crud.common.removed'));
    }
}
