<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TournmentRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "tournment_name" => ['required' , 'string'],
            "status" => ['required' , 'boolean'],
        ];
    }
}
