<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FamilyHistoryUpdateRequest extends FormRequest
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
            'patient_id' => ['exists:patients,id', 'nullable'],
            'cancer_type_id' => ['exists:cancer_types,id', 'nullable'],
            'degree' => ['nullable', 'max:255', 'string'],
            'number_of_relative' => ['nullable', 'numeric'],
        ];
    }
}
