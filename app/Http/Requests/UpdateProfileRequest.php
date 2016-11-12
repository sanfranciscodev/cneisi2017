<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
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
            'dni'        => 'required|integer|digits_between :7,8',
            'userType'   => 'required|min:5|max:17',
            'facultad'   => 'required_if:userType,student|required_if:userType,graduated|min:5|max:55',
            'legajo'     => 'required_if:userType,student|integer|digits_between :4,7'
        ];


    }

   
}
