@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a
                    href="{{ route('patient-investigations.index') }}"
                    class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.patient_investigations.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>
                        @lang('crud.patient_investigations.inputs.patient_id')
                    </h5>
                    <span
                        >{{ optional($patientInvestigation->patient)->reg_no ??
                        '-' }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patient_investigations.inputs.pap')</h5>
                    <span>{{ $patientInvestigation->pap ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patient_investigations.inputs.hpv_dna')</h5>
                    <span>{{ $patientInvestigation->hpv_dna ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('patient-investigations.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\PatientInvestigation::class)
                <a
                    href="{{ route('patient-investigations.create') }}"
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
