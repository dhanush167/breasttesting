@php $editing = isset($patienFollowup) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="patient_id" label="Patient" required>
            @php $selected = old('patient_id', ($editing ? $patienFollowup->patient_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Patient</option>
            @foreach($patients as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select
            name="followup_reason_id"
            label="Followup Reason"
            required
        >
            @php $selected = old('followup_reason_id', ($editing ? $patienFollowup->followup_reason_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Followup Reason</option>
            @foreach($followupReasons as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="other_comments"
            label="Other Comments"
            maxlength="255"
            >{{ old('other_comments', ($editing ?
            $patienFollowup->other_comments : '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.date
            name="date"
            label="Date"
            value="{{ old('date', ($editing ? optional($patienFollowup->date)->format('Y-m-d') : '')) }}"
            required
        ></x-inputs.date>
    </x-inputs.group>
</div>
