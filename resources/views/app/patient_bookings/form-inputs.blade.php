@php $editing = isset($patientBooking) @endphp

<div class="row">
    <x-inputs.group class="col-sm-6">
        <x-inputs.select name="location_id" label="Location" required onchange="checkHolidays(this.value)">
            @php $selected = old('location_id', ($editing ? $patientBooking->location_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Location</option>
            @foreach($locations as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-6">
        <x-inputs.select name="patient_id" label="Patient" required>
            @php $selected = old('patient_id', ($editing ? $patientBooking->patient_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Patient</option>
            @foreach($patients as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-12">
        <x-inputs.text
            id="booking_date"
            name="booking_date"
            label="Booking Date"
            :value="old('booking_slot', ($editing ? $patientBooking->booking_date : ''))"
            class="datetimepicker-input"
            data-toggle="datetimepicker"
            data-target="#booking_date"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="booking_slot"
            label="Booking Slot"
            :value="old('booking_slot', ($editing ? $patientBooking->booking_slot : ''))"
            placeholder="Booking Slot"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="booked_by"
            label="Booked By"
            :value="old('booked_by', ($editing ? $patientBooking->booked_by : ''))"
            maxlength="255"
            placeholder="Booked By"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="booked_via"
            label="Booked Via"
            :value="old('booked_via', ($editing ? $patientBooking->booked_via : ''))"
            maxlength="255"
            placeholder="Booked Via"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="status"
            label="Status"
            :value="old('status', ($editing ? $patientBooking->status : ''))"
            placeholder="Status"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <script>

        $('#booking_date').datetimepicker({
            format: 'YYYY-MM-DD',
            disabledDates: ['2022-10-11','2022-10-14']
        });


        function checkHolidays(string){

            var token = '<?php echo csrf_token() ?>';
            var location_id = string;

            //var token = $("input[name='_token']").val();

            $.ajax({
               method:'POST',
               url:"<?php echo route('location.hollidays'); ?>",
               data: {
                        location_id: location_id,
                        _token: token
                    },
                dataType: "json",
               success:function(data) {
                  $("#msg").html(data['year']);
                  //console.log(data['year']);
               }
            });



        }

    </script>


<div id="msg">sss</div>

</div>
