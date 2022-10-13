<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientUltraSoundScanStoreRequest extends FormRequest
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
            'ultra_sound_scan_factor_id' => [
                'required',
                'exists:ultra_sound_scan_factors,id',
            ],
            'value' => ['required', 'string'],
        ];
    }
}
