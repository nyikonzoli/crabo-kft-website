<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendEmailRequest extends FormRequest
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
            "name" => [
                "required",
                "min:1"
            ],
            "email" => [
                "required",
                "email:rfc,dns"
            ],
            "role" => [
                "required"
            ],
            "company" => [
                "sometimes",
                "min:1"
            ],
            "tax" => [
                "sometimes",
            ],
            "content" => [
                "required",
                "min:1",
                "max:2000"
            ]
        ];
    }
}
