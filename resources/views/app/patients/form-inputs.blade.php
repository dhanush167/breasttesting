@php $editing = isset($patient) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="user_id" label="User" required>
            @php $selected = old('user_id', ($editing ? $patient->user_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the User</option>
            @foreach($users as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.text
            name="reg_no"
            label="Reg No"
            :value="old('reg_no', ($editing ? $patient->reg_no : ''))"
            maxlength="255"
            placeholder="Reg No"
            required
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-6">
        <x-inputs.date
            name="reg_date"
            label="Reg Date"
            value="{{ old('reg_date', ($editing ? optional($patient->reg_date)->format('Y-m-d') : '')) }}"
            max="255"
            required
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.number
            name="age"
            label="Age"
            :value="old('age', ($editing ? $patient->age : ''))"
            max="255"
            placeholder="Age"
            required
        ></x-inputs.number>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.select name="gender" label="Gender">
            @php $selected = old('gender', ($editing ? $patient->gender : '')) @endphp
            <option value="male" {{ $selected == 'male' ? 'selected' : '' }} >Male</option>
            <option value="female" {{ $selected == 'female' ? 'selected' : '' }} >Female</option>
            <option value="other" {{ $selected == 'other' ? 'selected' : '' }} >Other</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12 col-lg-4">
        <x-inputs.select name="marital_status" label="Marital Status">
            @php $selected = old('marital_status', ($editing ? $patient->marital_status : '')) @endphp
            <option value="single" {{ $selected == 'single' ? 'selected' : '' }} >Single</option>
            <option value="married" {{ $selected == 'married' ? 'selected' : '' }} >Married</option>
            <option value="widowed" {{ $selected == 'widowed' ? 'selected' : '' }} >Widowed</option>
            <option value="divorced" {{ $selected == 'divorced' ? 'selected' : '' }} >Divorced</option>
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="address"
            label="Address"
            maxlength="255"
            required
            >{{ old('address', ($editing ? $patient->address : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.checkbox
            name="children"
            label="Children"
            :checked="old('children', ($editing ? $patient->children : 0))"
        ></x-inputs.checkbox>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="reason_for_visit" label="Reason For Visit"
            >{{ old('reason_for_visit', ($editing ? $patient->reason_for_visit :
            '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="pmhx" label="Pmhx" maxlength="255"
            >{{ old('pmhx', ($editing ? $patient->pmhx : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="pshx" label="Pshx" maxlength="255"
            >{{ old('pshx', ($editing ? $patient->pshx : ''))
            }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.date
            name="pre_pap_date"
            label="Pre Pap Date"
            value="{{ old('pre_pap_date', ($editing ? optional($patient->pre_pap_date)->format('Y-m-d') : '')) }}"
            max="255"
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="pre_pap_result"
            label="Pre Pap Result"
            maxlength="255"
            >{{ old('pre_pap_result', ($editing ? $patient->pre_pap_result :
            '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.date
            name="pre_uss_date"
            label="Pre Uss Date"
            value="{{ old('pre_uss_date', ($editing ? optional($patient->pre_uss_date)->format('Y-m-d') : '')) }}"
            max="255"
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="pre_uss_result"
            label="Pre Uss Result"
            maxlength="255"
            >{{ old('pre_uss_result', ($editing ? $patient->pre_uss_result :
            '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.date
            name="pre_hpv_date"
            label="Pre Hpv Date"
            value="{{ old('pre_hpv_date', ($editing ? optional($patient->pre_hpv_date)->format('Y-m-d') : '')) }}"
            max="255"
        ></x-inputs.date>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea
            name="pre_hpv_result"
            label="Pre Hpv Result"
            maxlength="255"
            >{{ old('pre_hpv_result', ($editing ? $patient->pre_hpv_result :
            '')) }}</x-inputs.textarea
        >
    </x-inputs.group>
</div>
