@extends('layouts.app')

@section('content')
<div class="container">
    <div class="searchbar mt-0 mb-4">
        <div class="row">
            <div class="col-md-6">
                <form>
                    <div class="input-group">
                        <input
                            id="indexSearch"
                            type="text"
                            name="search"
                            placeholder="{{ __('crud.common.search') }}"
                            value="{{ $search ?? '' }}"
                            class="form-control"
                            autocomplete="off"
                        />
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary">
                                <i class="icon ion-md-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6 text-right">
                @can('create', App\Models\PatientBooking::class)
                <a
                    href="{{ route('patient-bookings.create') }}"
                    class="btn btn-primary"
                >
                    <i class="icon ion-md-add"></i> @lang('crud.common.create')
                </a>
                @endcan
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div style="display: flex; justify-content: space-between;">
                <h4 class="card-title">
                    @lang('crud.patient_bookings.index_title')
                </h4>
            </div>

            <div class="table-responsive">
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th class="text-left">
                                @lang('crud.patient_bookings.inputs.location_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.patient_bookings.inputs.patient_id')
                            </th>
                            <th class="text-left">
                                @lang('crud.patient_bookings.inputs.booking_date')
                            </th>
                            <th class="text-left">
                                @lang('crud.patient_bookings.inputs.booking_slot')
                            </th>
                            <th class="text-left">
                                @lang('crud.patient_bookings.inputs.booked_by')
                            </th>
                            <th class="text-left">
                                @lang('crud.patient_bookings.inputs.booked_via')
                            </th>
                            <th class="text-left">
                                @lang('crud.patient_bookings.inputs.status')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($patientBookings as $patientBooking)
                        <tr>
                            <td>
                                {{ optional($patientBooking->location)->name ??
                                '-' }}
                            </td>
                            <td>
                                {{ optional($patientBooking->patient)->reg_no ??
                                '-' }}
                            </td>
                            <td>{{ $patientBooking->booking_date ?? '-' }}</td>
                            <td>{{ $patientBooking->booking_slot ?? '-' }}</td>
                            <td>{{ $patientBooking->booked_by ?? '-' }}</td>
                            <td>{{ $patientBooking->booked_via ?? '-' }}</td>
                            <td>{{ $patientBooking->status ?? '-' }}</td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $patientBooking)
                                    <a
                                        href="{{ route('patient-bookings.edit', $patientBooking) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $patientBooking)
                                    <a
                                        href="{{ route('patient-bookings.show', $patientBooking) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $patientBooking)
                                    <form
                                        action="{{ route('patient-bookings.destroy', $patientBooking) }}"
                                        method="POST"
                                        onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')"
                                    >
                                        @csrf @method('DELETE')
                                        <button
                                            type="submit"
                                            class="btn btn-light text-danger"
                                        >
                                            <i class="icon ion-md-trash"></i>
                                        </button>
                                    </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="8">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="8">
                                {!! $patientBookings->render() !!}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
