@php $editing = isset($patientInvestigation) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="patient_id" label="Patient" required>
            @php $selected = old('patient_id', ($editing ? $patientInvestigation->patient_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Patient</option>
            @foreach($patients as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="pap" label="Pap"
            >{{ old('pap', ($editing ? $patientInvestigation->pap : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="hpv_dna" label="Hpv Dna"
            >{{ old('hpv_dna', ($editing ? $patientInvestigation->hpv_dna : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>
</div>
