<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'cover_image' => ['nullable', 'image', 'max:250'],
            'title' => ['required', Rule::unique('projects')->ignore($this->project->id), 'min:4', 'max:50'],
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
