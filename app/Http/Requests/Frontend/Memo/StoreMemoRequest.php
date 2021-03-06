<?php

namespace App\Http\Requests\Frontend\Memo;

use App\Enums\CubicCentimeter\CubicCentimeterType;
use Illuminate\Foundation\Http\FormRequest;

class StoreMemoRequest extends FormRequest
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
            'course_id' => 'required|integer|exists:courses,id',
            'cc_id'     => 'required|integer|exists:cubic_centimeters,id',
            'rank'      => 'required|integer',
            'memo'      => 'nullable|string|max:255',
        ];
    }

    // attribute追加
}
