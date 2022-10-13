<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRiskFactorStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'patient_id' => ['required', 'exists:patients,id'],
            'age_of_menarche' => ['nullable', 'string'],
            'lrmp' => ['nullable', 'string'],
            'ocp' => ['nullable', 'string'],
            'hrt' => ['nullable', 'string'],
            'age_of_menopause' => ['nullable', 'string'],
            'post_menopausal_bleeding' => ['nullable', 'string'],
            'betel_chewing' => ['nullable', 'string'],
            'areca_nut' => ['nullable', 'string'],
            'smoking' => ['nullable', 'string'],
            'alcohol' => ['nullable', 'string'],
            'other_risk_factor' => ['nullable', 'string'],
            'sexual_hx' => ['nullable', 'string'],
            'occupation_radiation' => ['nullable', 'boolean'],
        ];
    }
}
