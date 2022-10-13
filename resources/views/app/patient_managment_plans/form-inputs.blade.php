@php $editing = isset($patientManagmentPlan) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="checklist_id" label="Checklist" required>
            @php $selected = old('checklist_id', ($editing ? $patientManagmentPlan->checklist_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Checklist</option>
            @foreach($checklists as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="patient_id" label="Patient" required>
            @php $selected = old('patient_id', ($editing ? $patientManagmentPlan->patient_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Patient</option>
            @foreach($patients as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.date
            name="date"
            label="Date"
            value="{{ old('date', ($editing ? optional($patientManagmentPlan->date)->format('Y-m-d') : '')) }}"
            required
        ></x-inputs.date>
    </x-inputs.group>
</div>
