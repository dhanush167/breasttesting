@php $editing = isset($familyHistory) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="patient_id" label="Patient">
            @php $selected = old('patient_id', ($editing ? $familyHistory->patient_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Patient</option>
            @foreach($patients as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="cancer_type_id" label="Cancer Type">
            @php $selected = old('cancer_type_id', ($editing ? $familyHistory->cancer_type_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Cancer Type</option>
            @foreach($cancerTypes as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="degree" label="Degree">
            @php $selected = old('degree', ($editing ? $familyHistory->degree : '')) @endphp
            <option value="1st" {{ $selected == '1st' ? 'selected' : '' }} >1st Degree</option>
            <option value="2nd" {{ $selected == '2nd' ? 'selected' : '' }} >2nd Degree</option>
            <option value="3rd" {{ $selected == '3rd' ? 'selected' : '' }} >3rd Degree</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.number
            name="number_of_relative"
            label="Number Of Relative"
            :value="old('number_of_relative', ($editing ? $familyHistory->number_of_relative : ''))"
            placeholder="Number Of Relative"
        ></x-inputs.number>
    </x-inputs.group>
</div>
