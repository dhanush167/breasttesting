@php $editing = isset($patientRiskFactor) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.select name="patient_id" label="Patient" required>
            @php $selected = old('patient_id', ($editing ? $patientRiskFactor->patient_id : '')) @endphp
            <option disabled {{ empty($selected) ? 'selected' : '' }}>Please select the Patient</option>
            @foreach($patients as $value => $label)
            <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }} >{{ $label }}</option>
            @endforeach
        </x-inputs.select>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="age_of_menarche"
            label="Age Of Menarche"
            :value="old('age_of_menarche', ($editing ? $patientRiskFactor->age_of_menarche : ''))"
            placeholder="Age Of Menarche"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="lrmp"
            label="Lrmp"
            :value="old('lrmp', ($editing ? $patientRiskFactor->lrmp : ''))"
            placeholder="Lrmp"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="ocp"
            label="Ocp"
            :value="old('ocp', ($editing ? $patientRiskFactor->ocp : ''))"
            placeholder="Ocp"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="hrt"
            label="Hrt"
            :value="old('hrt', ($editing ? $patientRiskFactor->hrt : ''))"
            maxlength="255"
            placeholder="Hrt"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="age_of_menopause"
            label="Age Of Menopause"
            :value="old('age_of_menopause', ($editing ? $patientRiskFactor->age_of_menopause : ''))"
            maxlength="255"
            placeholder="Age Of Menopause"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="post_menopausal_bleeding"
            label="Post Menopausal Bleeding"
            :value="old('post_menopausal_bleeding', ($editing ? $patientRiskFactor->post_menopausal_bleeding : ''))"
            maxlength="255"
            placeholder="Post Menopausal Bleeding"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="betel_chewing"
            label="Betel Chewing"
            :value="old('betel_chewing', ($editing ? $patientRiskFactor->betel_chewing : ''))"
            maxlength="255"
            placeholder="Betel Chewing"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="areca_nut"
            label="Areca Nut"
            :value="old('areca_nut', ($editing ? $patientRiskFactor->areca_nut : ''))"
            maxlength="255"
            placeholder="Areca Nut"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="smoking"
            label="Smoking"
            :value="old('smoking', ($editing ? $patientRiskFactor->smoking : ''))"
            maxlength="255"
            placeholder="Smoking"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="alcohol"
            label="Alcohol"
            :value="old('alcohol', ($editing ? $patientRiskFactor->alcohol : ''))"
            maxlength="255"
            placeholder="Alcohol"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.textarea name="other_risk_factor" label="Other Risk Factor"
            >{{ old('other_risk_factor', ($editing ?
            $patientRiskFactor->other_risk_factor : '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="sexual_hx"
            label="Sexual Hx"
            :value="old('sexual_hx', ($editing ? $patientRiskFactor->sexual_hx : ''))"
            maxlength="255"
            placeholder="Sexual Hx"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="col-sm-12">
        <x-inputs.checkbox
            name="occupation_radiation"
            label="Occupation Radiation"
            :checked="old('occupation_radiation', ($editing ? $patientRiskFactor->occupation_radiation : 0))"
        ></x-inputs.checkbox>
    </x-inputs.group>
</div>
