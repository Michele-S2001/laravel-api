<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title' => 'required|max:100|min:5',
            'description' => 'required|min:10',
            'type_id' => 'required|exists:types,id',
            'technologies' => 'exists:technologies,id',
            'image' => 'file|mimes:jpg,png,svg,tmp|max:4048'
        ];
    }
}
