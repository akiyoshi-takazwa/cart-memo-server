<?php

namespace App\Http\Requests\Frontend\Log;

use Illuminate\Foundation\Http\FormRequest;

class GetSearchLogRequest extends FormRequest
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
            'date'      => 'nullable|date|date_format:Y-m-d',
            'course_id' => 'required|integer|exists:courses,id',
            'cc_id'     => 'required|integer|exists:cubic_centimeters,id',
        ];
    }

    public function attributes()
    {
        return [
            'date'      => __('cart.rate'),
            'course_id' => __('cart.rate'),
            'cc_id'     => __('cart.rate'),
        ];
    }
}
