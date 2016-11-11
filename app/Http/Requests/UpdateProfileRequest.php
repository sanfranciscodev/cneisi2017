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
            'dni'        => 'required|integer|',
            'userType'   => 'required|min:5|max:255',
            'facultad'   => 'min:5|max:255',
            'legajo'     => 'integer'
        ];
    }
}
