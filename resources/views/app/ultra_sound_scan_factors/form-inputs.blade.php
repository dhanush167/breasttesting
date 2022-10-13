@php $editing = isset($ultraSoundScanFactor) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="name"
            label="Name"
            :value="old('name', ($editing ? $ultraSoundScanFactor->name : ''))"
            placeholder="Name"
            required
        ></x-inputs.text>
    </x-inputs.group>
</div>
