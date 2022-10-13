@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('patien-followups.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.patien_followups.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.patien_followups.inputs.patient_id')</h5>
                    <span
                        >{{ optional($patienFollowup->patient)->reg_no ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.patien_followups.inputs.followup_reason_id')
                    </h5>
                    <span
                        >{{ optional($patienFollowup->followupReason)->id ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.patien_followups.inputs.other_comments')
                    </h5>
                    <span>{{ $patienFollowup->other_comments ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patien_followups.inputs.date')</h5>
                    <span>{{ $patienFollowup->date ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('patien-followups.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\PatienFollowup::class)
                <a
                    href="{{ route('patien-followups.create') }}"
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
