<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientBookingStoreRequest extends FormRequest
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
            'location_id' => ['required', 'exists:locations,id'],
            'patient_id' => ['required', 'exists:patients,id'],
            'booking_date' => ['required', 'date'],
            'booking_slot' => ['required', 'string'],
            'booked_by' => ['nullable', 'string'],
            'booked_via' => ['nullable', 'string'],
            'status' => ['nullable', 'string'],
        ];
    }
}
