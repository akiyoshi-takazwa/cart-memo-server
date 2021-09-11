<?php

namespace App\Http\Requests\Frontend\Rate;

use Illuminate\Foundation\Http\FormRequest;

class StoreRateRequest extends FormRequest
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
            'rate' => 'required|numeric|digits_between:1,5',
        ];
    }

    public function attributes()
    {
        return [
            'rate' => __('cart.rate'),
        ];
    }
}
