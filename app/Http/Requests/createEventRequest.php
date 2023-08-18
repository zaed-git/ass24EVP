<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class createEventRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:155|min:2',
            'city' => 'nullable',
            'start_date' => 'required',
            'end_date' => 'required',
            'start_time' => 'required',
            'description' => 'required',
        ];
    }
}
