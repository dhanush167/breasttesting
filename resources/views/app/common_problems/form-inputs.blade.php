@php $editing = isset($commonProblem) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="problem" label="Problem" required
            >{{ old('problem', ($editing ? $commonProblem->problem : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="short_code"
            label="Short Code"
            :value="old('short_code', ($editing ? $commonProblem->short_code : ''))"
            maxlength="255"
            placeholder="Short Code"
        ></x-inputs.text>
    </x-inputs.group>
</div>
