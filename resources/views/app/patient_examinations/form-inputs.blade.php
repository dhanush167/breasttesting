@php $editing = isset($patientExamination) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="patient_id" label="Patient" required>
            @php $selected = old('patient_id', ($editing ? $patientExamination->patient_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Patient</option>
            @foreach($patients as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select
            name="examination_factor_id"
            label="Examination Factor"
            required
        >
            @php $selected = old('examination_factor_id', ($editing ? $patientExamination->examination_factor_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Examination Factor</option>
            @foreach($examinationFactors as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="value" label="Value"
            >{{ old('value', ($editing ? $patientExamination->value : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>
</div>
