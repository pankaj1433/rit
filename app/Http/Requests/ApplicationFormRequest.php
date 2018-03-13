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
            'address_residence' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip_code' => 'required',
            'phone_residence' => 'required',
            'mail_address' => 'required',
            'mail_city' => 'required',
            'mail_state' => 'required',
            'mail_zip' => 'required',
            'message_phone' => 'required',
            'citizen' => 'required',
            'eligible_to_work' => 'required',
            'alien_doc' => 'required',
            'race' => 'required',
            'email_address' => 'required|email',

            'foster_child' => 'required',
            'tanf_calworks' => 'required',
            'family_food_stamps' => 'required',
            'gr' => 'required',
            'other_needy_family' => 'required',
            'disabled' => 'required',
            'homeless' => 'required',
            'pregnant_parenting_youth' => 'required',
            'runaway_youth' => 'required',
            'probation' => 'required',
            'english_learner' => 'required',
            'unemployment_insurance' => 'required',
            'veteran_status' => 'required',
            'spouse_of_qualifying_veteran' => 'required',
            'supportive_service_needed' => 'required',

            'education_status' => 'required',
            'agency' => 'required',
            'staff_id' => 'required',
            'note' => 'required',
            'work_permit_on_file' => 'required',
            'parent_signature_on_file' => 'required',

            'pdj' => 'required',
            'cluster' => 'required',
            'area_office' => 'required',
            'caseload_no' => 'required',
            'ethinicity' => 'required',

        ];
    }
}
