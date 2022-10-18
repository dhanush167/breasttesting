@php $editing = isset($patientBooking) @endphp

<div class="row">
    <x-inputs.group class="col-sm-6">
        <x-inputs.select id="location_id" name="location_id" label="Location" required>
            @php $selected = old('location_id', ($editing ? $patientBooking->location_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Location</option>
            @foreach ($locations as $value => $label)
                <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }}>{{ $label }}
                </option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-6">
        <x-inputs.select name="patient_id" class="select2" label="Patient" required>
            @php $selected = old('patient_id', ($editing ? $patientBooking->patient_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Patient</option>
            @foreach ($patients as $value => $label)
                <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }}>{{ $label }}
                </option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-12">
        <x-inputs.text id="booking_date" name="booking_date" label="Booking Date" :value="old('booking_date', $editing ? $patientBooking->booking_date : '')"
            class="datetimepicker-input" data-toggle="datetimepicker" data-target="#booking_date"
            onchange="showBookingSlots(this.value)" required></x-inputs.text>
    </x-inputs.group>

 {{--  <x-inputs.group class="col-sm-12 col-lg-12">
        <x-inputs.select id="booking_slot" name="booking_slot[]" class="select2" multiple="multiple" label="Booking Slot"></x-inputs.select>
    </x-inputs.group> --}}

    <x-inputs.group class="col-sm-12 col-lg-12">
        <label class="label label-required" for="booking_slot">
            Booking Slot
        </label>
        <select id="booking_slot" name="booking_slot" class="form-control select2" required>
            @php $selected = old('patient_id', ($editing ? $patientBooking->booking_slot : '')) @endphp
        </select>
    </x-inputs.group>


    <x-inputs.group class="col-sm-12">
        <x-inputs.text name="booked_by" label="Booked By" :value="old('booked_by', $editing ? $patientBooking->booked_by : '')" maxlength="255" placeholder="Booked By"
            required></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text name="booked_via" label="Booked Via" :value="old('booked_via', $editing ? $patientBooking->booked_via : '')" maxlength="255" placeholder="Booked Via"
            required></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text name="status" label="Status" :value="old('status', $editing ? $patientBooking->status : '')" placeholder="Status" required></x-inputs.text>
    </x-inputs.group>

    {{-- <div id="msg"></div> --}}

</div>


<script>
    $('#booking_date').datetimepicker({
        format: 'YYYY-MM-DD',
        /* disabledDates: ['2022-10-11','2022-10-14'], */
        daysOfWeekDisabled: [0, 6],
    });


    function showBookingSlots(string) {

        var token = '<?php echo csrf_token(); ?>';
        var dateSelected = string;
        var location_id = $('#location_id').find(":selected").val();


        $.ajax({
            method: 'POST',
            url: "<?php echo route('availableslots'); ?>",
            data: {
                dateSelected: dateSelected,
                location_id: location_id,
                _token: token
            },
            dataType: "json",
            success: function(data) {
                //$("#msg").html(data);
                /*  console.log(data); */

                $("#booking_slot").empty();

                $.each(data, function(index, value) {
                    var $option = $("<option/>", {
                        value: value,
                        text: value
                    });
                    $('#booking_slot').append($option);
                });
            }
        });

    }

    $(function() {
        $('.select2').select2()
    });

</script>
