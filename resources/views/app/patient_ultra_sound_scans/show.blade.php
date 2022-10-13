@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a
                    href="{{ route('patient-ultra-sound-scans.index') }}"
                    class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.patient_ultra_sound_scans.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>
                        @lang('crud.patient_ultra_sound_scans.inputs.patient_id')
                    </h5>
                    <span
                        >{{ optional($patientUltraSoundScan->patient)->reg_no ??
                        '-' }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.patient_ultra_sound_scans.inputs.ultra_sound_scan_factor_id')
                    </h5>
                    <span
                        >{{
                        optional($patientUltraSoundScan->ultraSoundScanFactor)->name
                        ?? '-' }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.patient_ultra_sound_scans.inputs.value')
                    </h5>
                    <span>{{ $patientUltraSoundScan->value ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('patient-ultra-sound-scans.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\PatientUltraSoundScan::class)
                <a
                    href="{{ route('patient-ultra-sound-scans.create') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
