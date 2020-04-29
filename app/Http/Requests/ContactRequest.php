<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A name is required',
            'email.required'  => 'We need your email address',
            'email.email' => 'We need a properly formatted email address',
            'subject.required' => 'The subject is required',
            'message.required' => 'A message is required'
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'Email address'
        ];
    }
}
