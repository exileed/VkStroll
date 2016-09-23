<?php

namespace VkStroll\Http\Requests;

use VkStroll\Http\Requests\Request;

class ReponseTicketRequest extends Request
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
            'ticket_id' => 'required|exists:tickets,id',
            'msg' => 'required|min:3'
        ];
    }
}
