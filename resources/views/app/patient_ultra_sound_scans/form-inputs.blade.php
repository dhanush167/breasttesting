@php $editing = isset($patientUltraSoundScan) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="patient_id" label="Patient" required>
            @php $selected = old('patient_id', ($editing ? $patientUltraSoundScan->patient_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Patient</option>
            @foreach($patients as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select
            name="ultra_sound_scan_factor_id"
            label="Ultra Sound Scan Factor"
            required
        >
            @php $selected = old('ultra_sound_scan_factor_id', ($editing ? $patientUltraSoundScan->ultra_sound_scan_factor_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Ultra Sound Scan Factor</option>
            @foreach($ultraSoundScanFactors as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="value" label="Value" required
            >{{ old('value', ($editing ? $patientUltraSoundScan->value : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>
</div>
