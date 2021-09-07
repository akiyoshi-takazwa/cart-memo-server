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

//    protected function prepareForValidation()
//    {
//        //$this->cubicCentimeter($this->cc_id);
////        $this->course($this->course_id);
////        $this->rank($this->rank);
//    }
//
//    /**
//     * @param string $ccId
//     */
//    protected function cubicCentimeter(string $ccId)
//    {
//        switch ($ccId){
//            case (CubicCentimeterType::NORMAL()):
//                return $this->merge([
//                    'course_id' => config('cubicCentimeters.normal')
//                ]);
//            case (CubicCentimeterType::SUPER()):
//                return $this->merge([
//                    'course_id' => config('cubicCentimeters.super')
//                ]);
//            case (CubicCentimeterType::ULTRA()):
//                return $this->merge([
//                    'course_id' => config('cubicCentimeters.ultra')
//                ]);
//            case (CubicCentimeterType::MIRROR()):
//                return $this->merge([
//                    'course_id' => config('cubicCentimeters.mirror')
//                ]);
//            case (CubicCentimeterType::HYPER()):
//                return $this->merge([
//                    'course_id' => config('cubicCentimeters.hyper')
//                ]);
//        }
//    }

//    /**
//     * @param string $courseId
//     */
//    protected function course(string $courseId)
//    {
//        $this->merge([
//            'course_id' => Str::slug($this->slug),
//        ]);
//    }
//
//    /**
//     * @param string $rank
//     */
//    protected function rank(string $rank)
//    {
//        $this->merge([
//            'course_id' => Str::slug($this->slug),
//        ]);
//    }
}
