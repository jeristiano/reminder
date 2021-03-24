<?php

namespace App\Http\Requests;

use App\Models\Note;
use Illuminate\Foundation\Http\FormRequest;

/**
 * Class ContentUpdateRequest
 * @package App\Http\Requests
 */
class ContentUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize ()
    {
       return true;
    }

    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules ()
    {
        return [
            'title' => 'required|max:100',
            'tag_id' => 'required|integer',
            'text' => "required"
        ];
    }

    public function messages()
    {
        return [
            'title.required' => '缺少主题',
            'title.max' => '主题超过限制100字符',
            'tag_id.integer' =>'便签必须为数字',
            'tag_id.required' =>'便签必须',
            'text.required' => '缺少内容',
        ];
    }




}
