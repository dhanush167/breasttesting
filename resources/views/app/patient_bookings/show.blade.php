@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('patient-bookings.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.patient_bookings.show_title')
            </h4>

            <div class="mt-4">
                <div class="mb-4">
                    <h5>@lang('crud.patient_bookings.inputs.location_id')</h5>
                    <span
                        >{{ optional($patientBooking->location)->name ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patient_bookings.inputs.patient_id')</h5>
                    <span
                        >{{ optional($patientBooking->patient)->reg_no ?? '-'
                        }}</span
                    >
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patient_bookings.inputs.booking_date')</h5>
                    <span>{{ $patientBooking->booking_date ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patient_bookings.inputs.booking_slot')</h5>
                    <span>{{ $patientBooking->booking_slot ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patient_bookings.inputs.booked_by')</h5>
                    <span>{{ $patientBooking->booked_by ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patient_bookings.inputs.booked_via')</h5>
                    <span>{{ $patientBooking->booked_via ?? '-' }}</span>
                </div>
                <div class="mb-4">
                    <h5>@lang('crud.patient_bookings.inputs.status')</h5>
                    <span>{{ $patientBooking->status ?? '-' }}</span>
                </div>
            </div>

            <div class="mt-4">
                <a
                    href="{{ route('patient-bookings.index') }}"
                    class="btn btn-light"
                >
                    <i class="icon ion-md-return-left"></i>
                    @lang('crud.common.back')
                </a>

                @can('create', App\Models\PatientBooking::class)
                <a
                    href="{{ route('patient-bookings.create') }}"
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
