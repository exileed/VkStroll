<?php

namespace VkStroll\Http\Requests;

use VkStroll\Http\Requests\Request;

class AddTargetsRequest extends Request
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
            'name' => 'required',
            'type' => 'required|in:search,active,groups,list',
            'json_params' => 'required'
        ];
    }
}
