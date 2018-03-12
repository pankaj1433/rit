<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ApplicationFormRequest extends FormRequest
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
            'application_id' => 'required',
            'application_date' => 'required|date',
            'enrollment_date' => 'required|date',
            'assigned_agency' => 'required',
            'current_status' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'ssn' => 'required',
            'funding_source' => 'required',
            'caljobs_app' => 'required',
            'birth_date' => 'required|date',
            'age' => 'required',
            'gender' => 'required',
        ];
    }
}
