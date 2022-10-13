@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('booking-settings.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.booking_settings.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.booking_settings.inputs.location_id')</h5>
                    <span
                        >{{ optional($bookingSetting->location)->name ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.booking_settings.inputs.year')</h5>
                    <span>{{ $bookingSetting->year ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.booking_settings.inputs.holidays')</h5>
                    <span>{{ $bookingSetting->holidays ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.booking_settings.inputs.weekly_working_days')
                    </h5>
                    <span
                        >{{ $bookingSetting->weekly_working_days ?? '-' }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>
                        @lang('crud.booking_settings.inputs.day_start_time')
                    </h5>
                    <span>{{ $bookingSetting->day_start_time ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.booking_settings.inputs.day_end_time')</h5>
                    <span>{{ $bookingSetting->day_end_time ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.booking_settings.inputs.slot_duration')</h5>
                    <span>{{ $bookingSetting->slot_duration ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.booking_settings.inputs.status')</h5>
                    <span>{{ $bookingSetting->status ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('booking-settings.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\BookingSetting::class)
                <a
                    href="{{ route('booking-settings.create') }}"
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
