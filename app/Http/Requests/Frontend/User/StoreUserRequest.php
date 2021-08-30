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
            'name'     => 'required|string|max:15',
            'password' => 'required|string|confirmed|min:8',
        ];
    }

    public function attributes()
    {
        return [
            'name'     => __('user.name'),
            'password' => __('user.password'),
        ];
    }

}
