<?php

namespace VkStroll\Http\Requests;

use VkStroll\Http\Requests\Request;

class AddTicketRequest extends Request
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
            'title' => 'required|min:9',
            'msg' => 'required|min:30'

        ];
    }
}
