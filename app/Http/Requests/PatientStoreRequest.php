<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientStoreRequest extends FormRequest
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
            'user_id' => ['required', 'exists:users,id'],
            'reg_no' => ['required', 'string'],
            'reg_date' => ['required', 'date'],
            'age' => ['required', 'numeric'],
            'gender' => ['required', 'in:male,female,other'],
            'marital_status' => ['required', 'string'],
            'address' => ['required', 'string'],
            'children' => ['nullable', 'boolean'],
            'reason_for_visit' => ['nullable', 'string'],
            'pmhx' => ['nullable', 'string'],
            'pshx' => ['nullable', 'string'],
            'pre_pap_date' => ['nullable', 'date'],
            'pre_pap_result' => ['nullable', 'string'],
            'pre_uss_date' => ['nullable', 'date'],
            'pre_uss_result' => ['nullable', 'string'],
            'pre_hpv_date' => ['nullable', 'date'],
            'pre_hpv_result' => ['nullable', 'string'],
        ];
    }
}
