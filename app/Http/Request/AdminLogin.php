<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLogin extends FormRequest
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
            'user-name' => 'required|string|exists:users,user_name|alpha',
            'password' => 'required|string',
        ];
    }

    public function attributes()
    {
        return [
            'user-name' => 'User Name',
            'password' => 'Password'
        ];
    }

    public function messages()
    {
        return [];
    }
}
