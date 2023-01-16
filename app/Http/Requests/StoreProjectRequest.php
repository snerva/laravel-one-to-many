<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'cover_image' => ['nullable', 'image', 'max:250'],
            'title' => ['required', 'unique:projects', 'min:4', 'max:50'],
            'type_id' => ['nullable', 'exists:types,id'],
            'description' => ['required', 'min:20'],
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Il titolo é obbligatorio",
            'title.min' => "Il titolo deve essere almeno di :min caratteri",
            'title.max' => "Il titolo deve essere almeno di :max caratteri",
            'description.min' => "La descrizione deve essere almeno di :min caratteri",
        ];
    }
}
