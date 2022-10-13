<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookingSettingUpdateRequest extends FormRequest
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
            'year' => ['required', 'numeric'],
            'holidays' => ['required', 'string'],
            'weekly_working_days' => ['nullable','string'],
            'day_start_time' => ['required', 'date_format:H:i:s'],
            'day_end_time' => ['required', 'date_format:H:i:s'],
            'slot_duration' => ['required', 'numeric'],
            'status' => ['required', 'boolean'],
        ];
    }
}
