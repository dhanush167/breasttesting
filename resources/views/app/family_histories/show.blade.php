@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('family-histories.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.family_histories.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.family_histories.inputs.patient_id')</h5>
                    <span
                        >{{ optional($familyHistory->patient)->reg_no ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.family_histories.inputs.cancer_type_id')
                    </h5>
                    <span
                        >{{ optional($familyHistory->cancerType)->name ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.family_histories.inputs.degree')</h5>
                    <span>{{ $familyHistory->degree ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.family_histories.inputs.number_of_relative')
                    </h5>
                    <span>{{ $familyHistory->number_of_relative ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('family-histories.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\FamilyHistory::class)
                <a
                    href="{{ route('family-histories.create') }}"
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
