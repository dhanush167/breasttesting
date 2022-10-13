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
                @can('create', App\Models\BookingSetting::class)
                <a
                    href="{{ route('booking-settings.create') }}"
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
                    @lang('crud.booking_settings.index_title')
                </h4>
            </div>

            <div class="table-responsive">
                <table class="table table-borderless table-hover">
                    <thead>
                        <tr>
                            <th class="text-left">
                                @lang('crud.booking_settings.inputs.location_id')
                            </th>
                            <th class="text-right">
                                @lang('crud.booking_settings.inputs.year')
                            </th>
                            <th class="text-left">
                                @lang('crud.booking_settings.inputs.holidays')
                            </th>
                            <th class="text-left">
                                @lang('crud.booking_settings.inputs.weekly_working_days')
                            </th>
                            <th class="text-left">
                                @lang('crud.booking_settings.inputs.day_start_time')
                            </th>
                            <th class="text-left">
                                @lang('crud.booking_settings.inputs.day_end_time')
                            </th>
                            <th class="text-right">
                                @lang('crud.booking_settings.inputs.slot_duration')
                            </th>
                            <th class="text-left">
                                @lang('crud.booking_settings.inputs.status')
                            </th>
                            <th class="text-center">
                                @lang('crud.common.actions')
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($bookingSettings as $bookingSetting)
                        <tr>
                            <td>
                                {{ optional($bookingSetting->location)->name ??
                                '-' }}
                            </td>
                            <td>{{ $bookingSetting->year ?? '-' }}</td>
                            <td>{{ $bookingSetting->holidays ?? '-' }}</td>
                            <td>
                                {{ $bookingSetting->weekly_working_days ?? '-'
                                }}
                            </td>
                            <td>
                                {{ $bookingSetting->day_start_time ?? '-' }}
                            </td>
                            <td>{{ $bookingSetting->day_end_time ?? '-' }}</td>
                            <td>{{ $bookingSetting->slot_duration ?? '-' }}</td>
                            <td>{{ $bookingSetting->status ?? '-' }}</td>
                            <td class="text-center" style="width: 134px;">
                                <div
                                    role="group"
                                    aria-label="Row Actions"
                                    class="btn-group"
                                >
                                    @can('update', $bookingSetting)
                                    <a
                                        href="{{ route('booking-settings.edit', $bookingSetting) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-create"></i>
                                        </button>
                                    </a>
                                    @endcan @can('view', $bookingSetting)
                                    <a
                                        href="{{ route('booking-settings.show', $bookingSetting) }}"
                                    >
                                        <button
                                            type="button"
                                            class="btn btn-light"
                                        >
                                            <i class="icon ion-md-eye"></i>
                                        </button>
                                    </a>
                                    @endcan @can('delete', $bookingSetting)
                                    <form
                                        action="{{ route('booking-settings.destroy', $bookingSetting) }}"
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
                            <td colspan="9">
                                @lang('crud.common.no_items_found')
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="9">
                                {!! $bookingSettings->render() !!}
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
