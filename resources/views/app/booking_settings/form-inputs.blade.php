@php $editing = isset($bookingSetting) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="location_id" label="Location" required>
            @php $selected = old('location_id', ($editing ? $bookingSetting->location_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Location</option>
            @foreach($locations as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.number
            id="year"
            name="year"
            label="Year"
            :value="old('year', ($editing ? $bookingSetting->year : ''))"
            placeholder="Year"
            class="datetimepicker-input"
            data-toggle="datetimepicker"
            data-target="#year"
            required
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            id="holidays"
            name="holidays"
            label="Holidays"
            :value="old('holidays', ($editing ? $bookingSetting->holidays : ''))"
            placeholder="Holidays"
            class="datetimepicker-input"
            data-toggle="datetimepicker"
            data-target="#holidays"
            required
        ></x-inputs.text>
    </x-inputs.group>

    {{-- <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            id="weekly_working_days"
            name="weekly_working_days"
            label="Weekly Working Days"
            :value="old('weekly_working_days', ($editing ? $bookingSetting->weekly_working_days : ''))"
            placeholder="Weekly Working Days"
            required
        ></x-inputs.text>
    </x-inputs.group> --}}

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.select name="weekly_working_days[]" class="select2" multiple="multiple" label="Weekly Working Days">
            @php $selected = old('weekly_working_days', ($editing ? $bookingSetting->weekly_working_days : '')) @endphp
            <option value="0" {{ $selected == '0' ? 'selected' : '' }} >Sunday</option>
            <option value="1" {{ $selected == '1' ? 'selected' : '' }} >Monday</option>
            <option value="2" {{ $selected == '2' ? 'selected' : '' }} >Tuesday</option>
            <option value="3" {{ $selected == '3' ? 'selected' : '' }} >Wednesday</option>
            <option value="4" {{ $selected == '4' ? 'selected' : '' }} >Thuresday</option>
            <option value="5" {{ $selected == '5' ? 'selected' : '' }} >Friday</option>
            <option value="6" {{ $selected == '6' ? 'selected' : '' }} >Saturday</option>
        </x-inputs.select>
    </x-inputs.group>


    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            id="day_start_time"
            name="day_start_time"
            label="Day Start Time"
            :value="old('day_start_time', ($editing ? $bookingSetting->day_start_time : ''))"
            maxlength="255"
            placeholder="Day Start Time"
            class="datetimepicker-input"
            data-toggle="datetimepicker"
            data-target="#day_start_time"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            id="day_end_time"
            name="day_end_time"
            label="Day End Time"
            :value="old('day_end_time', ($editing ? $bookingSetting->day_end_time : ''))"
            maxlength="255"
            placeholder="Day End Time"
            class="datetimepicker-input"
            data-toggle="datetimepicker"
            data-target="#day_end_time"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.number
            name="slot_duration"
            label="Slot Duration"
            :value="old('slot_duration', ($editing ? $bookingSetting->slot_duration : ''))"
            max="255"
            placeholder="Slot Duration"
            required
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.checkbox
            name="status"
            label="Status"
            :checked="old('status', ($editing ? $bookingSetting->status : 0))"
        ></x-inputs.checkbox>
    </x-inputs.group>


    <script type="text/javascript">
        //Timepicker
        $('#day_start_time').datetimepicker({
            format: 'HH:mm:ss',
            pickDate: false,
            pickSeconds: true,
            pick12HourFormat: false
        });

        $('#day_end_time').datetimepicker({
            format: 'HH:mm:ss',
            pickDate: false,
            pickSeconds: true,
            pick12HourFormat: false
        });

        $('#year').datetimepicker({
            format: 'Y',
        });

        $('#holidays').datetimepicker({
            allowMultidate: true,
            multidateSeparator: ',',
            format: 'YYYY-MM-DD'
        });

        $(function () {
            $('.select2').select2()
        });




    </script>
</div>
