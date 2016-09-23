<?php

namespace VkStroll\Http\Requests;

use VkStroll\Http\Requests\Request;

class AddUserRequest extends Request
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
            'name' => 'required|max:12|min:2',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|max:32|confirmed',
        ];
    }
}
