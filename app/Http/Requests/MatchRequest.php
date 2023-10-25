<?php

namespace App\Http\Requests;

use App\Rules\DateFormat;
use App\Rules\TimeFormat;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class MatchRequest extends FormRequest
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
            'time_number' => ['required' , 'string' , new TimeFormat],
            'time_period' => ['required' , 'in:AM,PM'],
            'date' => ['required' , new DateFormat],
            'tournment_id' => ['required'],
            'team_name_1' => ['required' , 'integer' , 'exists:teams,id'],
            'team_name_2' => ['required' , 'integer' , 'exists:teams,id'],
            'status' => ['required' , 'boolean'],
        ];
    }
}
