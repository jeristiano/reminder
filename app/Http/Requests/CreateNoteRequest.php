<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class CreateNoteRequest
 * @package App\Http\Requests
 */
class CreateNoteRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     * @return bool
     */
    public function authorize ()
    {
        return (int)request()->user_id === $this->user()->id;
    }

    /**
     * Get the validation rules that apply to the request.
     * @return array
     */
    public function rules ()
    {
        return [
            'user_id' => 'required|numeric',
            'title' => 'required|max:100',
            'tag_id' => 'required|integer',
            'text' => "required"
        ];
    }
}
