@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('patients.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.patients.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.patients.inputs.user_id')</h5>
                    <span>{{ optional($patient->user)->name ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patients.inputs.reg_no')</h5>
                    <span>{{ $patient->reg_no ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patients.inputs.reg_date')</h5>
                    <span>{{ $patient->reg_date ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patients.inputs.age')</h5>
                    <span>{{ $patient->age ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patients.inputs.gender')</h5>
                    <span>{{ $patient->gender ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patients.inputs.marital_status')</h5>
                    <span>{{ $patient->marital_status ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patients.inputs.address')</h5>
                    <span>{{ $patient->address ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patients.inputs.children')</h5>
                    <span>{{ $patient->children ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patients.inputs.reason_for_visit')</h5>
                    <span>{{ $patient->reason_for_visit ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patients.inputs.pmhx')</h5>
                    <span>{{ $patient->pmhx ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patients.inputs.pshx')</h5>
                    <span>{{ $patient->pshx ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patients.inputs.pre_pap_date')</h5>
                    <span>{{ $patient->pre_pap_date ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patients.inputs.pre_pap_result')</h5>
                    <span>{{ $patient->pre_pap_result ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patients.inputs.pre_uss_date')</h5>
                    <span>{{ $patient->pre_uss_date ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patients.inputs.pre_uss_result')</h5>
                    <span>{{ $patient->pre_uss_result ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patients.inputs.pre_hpv_date')</h5>
                    <span>{{ $patient->pre_hpv_date ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patients.inputs.pre_hpv_result')</h5>
                    <span>{{ $patient->pre_hpv_result ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a href="{{ route('patients.index') }}" class="btn btn-light">
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\Patient::class)
                <a href="{{ route('patients.create') }}" class="btn btn-light">
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>
</div>
@endsection
