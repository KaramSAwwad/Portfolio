<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendEmailRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|min:3|max:225|string',
            'message' => 'required|min:3|max:550|string'
        ];
    }

    public function messages()
    {
        return [
//            'name.required' => trans('messages.the name is required'),
            'name.required' => 'the name is required',
            'name.min' => 'the minimum of name is 3 characters',
            'name.max' => 'the maximum of name is 225 characters',
            'name.string' => 'the name type must be string',

            'message.required' => 'the message is required',
            'message.min' => 'the minimum of message is 3 characters',
            'message.max' => 'the maximum of message is 225 characters',
            'message.string' => 'the message type must be string',

        ];

    }
}
