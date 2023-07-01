<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [

                'name' => ['required', 'min: 6', 'max: 25', 'alpha'],
                'email' => ['required', 'email'],
                'password' => ['required', 'min: 30', 'max: 50']

        ];
    }

    public function message ()
    {
        return[

            'name.alpha' => 'it can only contain alphabet, it will not accept numbers or any other special characters'

        ];
    }
}
