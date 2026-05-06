<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class IdeaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // hiljem lisan kasutaja autentimise
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'description' => ['required', 'min:15'],
        ];
    }

    public function messages(): array
    {
        return [
            'description.required' => 'I NEED A :ATTRIBUTE!!!!!',
            'description.min' => 'THAT IS NOT ENOUGH, GIVE ME AT LEAST 15 CHARACTERS FOR THE :ATTRIBUTE!!!!!!!!',
        ];
    }
}
