@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <a href="{{ route('booking-settings.index') }}" class="mr-4"
                    ><i class="icon ion-md-arrow-back"></i
                ></a>
                @lang('crud.booking_settings.create_title')
            </h4>

            <x-form
                method="POST"
                action="{{ route('booking-settings.store') }}"
                class="mt-4"
            >
                @include('app.booking_settings.form-inputs')

                <div class="mt-4">
                    <a
                        href="{{ route('booking-settings.index') }}"
                        class="btn btn-light"
                    >
                        <i class="icon ion-md-return-left text-primary"></i>
                        @lang('crud.common.back')
                    </a>

                    <button type="submit" class="btn btn-primary float-right">
                        <i class="icon ion-md-save"></i>
                        @lang('crud.common.create')
                    </button>
                </div>
            </x-form>
        </div>
    </div>
</div>
@endsection

@push('scripts')

<script type="text/javascript">
    //Timepicker
    $('#day_start_time').datetimepicker({
        format: 'HH:mm',
        pickDate: false,
        pickSeconds: false,
        pick12HourFormat: false
    });

    $('#day_end_time').datetimepicker({
        format: 'HH:mm',
        pickDate: false,
        pickSeconds: false,
        pick12HourFormat: false
    })

</script>

@endpush
