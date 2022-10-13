@php $editing = isset($followupReason) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="reason" label="Reason" required
            >{{ old('reason', ($editing ? $followupReason->reason : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>
</div>
