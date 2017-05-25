<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientprofileRequest extends FormRequest
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
            'ref_no' => 'required',
            'acc_no' => 'required',
            'name' => 'required',
            'nric' => 'required',
            'contact' => 'required|numeric',
            'gender_id' => 'required',
            'nationality_id' => 'required',
            'resident_id' =>'required'
        ];
    }

    public function messages()
    {
        return [
            'ref_no.required' => 'Please fill in the Ref No',
            'acc_no.required' => 'Please fill in the Acc No',
            'name.required' => 'Please fill in the Name',
            'nric.required' => 'Please fill in the NRIC/ Passport',
            'contact.required' => 'Please fill in the Contact Number',
            'contact.numeric' => 'Contact Number must be in numbers',
            'gender_id.required' => 'Please choose the Gender',
            'nationality_id.required' => 'Please choose the Nationality',
            'resident_id.required' => 'Please choose the Resident',
        ];
    }
}
