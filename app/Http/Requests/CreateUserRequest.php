<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreateUserRequest extends Request
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
            'username' => 'required|unique:users',
            'firstname' => 'required|min:2',
            'lastname' => 'required|min:2',
            'email' => 'required|unique:users',
            'password' => 'required|min:4',

        ];
    }

    public function messages() {

        return [
          'username.required' => 'A username is required',
          'firstname.required' => 'A first name is required',
          'email.required' => 'An email is required',
          'lastname.required' => 'A last name is required',
          'password.required' => 'A password is required',
        ];
    }
}
