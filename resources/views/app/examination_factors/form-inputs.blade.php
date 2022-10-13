@php $editing = isset($examinationFactor) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="name"
            label="Name"
            :value="old('name', ($editing ? $examinationFactor->name : ''))"
            maxlength="255"
            placeholder="Name"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.select name="type" label="Type">
            @php $selected = old('type', ($editing ? $examinationFactor->type : '')) @endphp
            <option value="single" {{ $selected == 'single' ? 'selected' : '' }} >Text Box</option>
            <option value="multiple" {{ $selected == 'multiple' ? 'selected' : '' }} >Text Area</option>
        </x-inputs.select>
    </x-inputs.group>
</div>
