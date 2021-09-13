<?php

namespace App\Http\Requests\Frontend\User;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            'username'     => 'required|string|max:50',
            'password'     => 'required|string|confirmed|min:8',
        ];
    }

    public function attributes()
    {
        return [
            'username' => __('user.username'),
            'password' => __('user.password'),
        ];
    }

}
