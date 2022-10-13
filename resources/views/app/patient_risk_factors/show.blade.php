@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('patient-risk-factors.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.patient_risk_factors.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>
                        @lang('crud.patient_risk_factors.inputs.patient_id')
                    </h5>
                    <span
                        >{{ optional($patientRiskFactor->patient)->reg_no ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.patient_risk_factors.inputs.age_of_menarche')
                    </h5>
                    <span
                        >{{ $patientRiskFactor->age_of_menarche ?? '-' }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patient_risk_factors.inputs.lrmp')</h5>
                    <span>{{ $patientRiskFactor->lrmp ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patient_risk_factors.inputs.ocp')</h5>
                    <span>{{ $patientRiskFactor->ocp ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patient_risk_factors.inputs.hrt')</h5>
                    <span>{{ $patientRiskFactor->hrt ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.patient_risk_factors.inputs.age_of_menopause')
                    </h5>
                    <span
                        >{{ $patientRiskFactor->age_of_menopause ?? '-' }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.patient_risk_factors.inputs.post_menopausal_bleeding')
                    </h5>
                    <span
                        >{{ $patientRiskFactor->post_menopausal_bleeding ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.patient_risk_factors.inputs.betel_chewing')
                    </h5>
                    <span>{{ $patientRiskFactor->betel_chewing ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patient_risk_factors.inputs.areca_nut')</h5>
                    <span>{{ $patientRiskFactor->areca_nut ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patient_risk_factors.inputs.smoking')</h5>
                    <span>{{ $patientRiskFactor->smoking ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patient_risk_factors.inputs.alcohol')</h5>
                    <span>{{ $patientRiskFactor->alcohol ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.patient_risk_factors.inputs.other_risk_factor')
                    </h5>
                    <span
                        >{{ $patientRiskFactor->other_risk_factor ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patient_risk_factors.inputs.sexual_hx')</h5>
                    <span>{{ $patientRiskFactor->sexual_hx ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.patient_risk_factors.inputs.occupation_radiation')
                    </h5>
                    <span
                        >{{ $patientRiskFactor->occupation_radiation ?? '-'
                        }}</span
                    >
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('patient-risk-factors.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\PatientRiskFactor::class)
                <a
                    href="{{ route('patient-risk-factors.create') }}"
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
