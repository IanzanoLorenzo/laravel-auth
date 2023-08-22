<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
            'project_name' => 'required|max:50',
            'description' => 'required|max:255',
            'creator_name' => 'required|max:50'
        ];
    }

    public function messages()
    {
        return [
            'project_name.required' => 'Il campo "Nome" è obbligatorio',
            'project_name.max' => 'Il campo "Nome" non può superare i :max caratteri',
            'description.required' => 'Il campo "Descrizione" è obbligatorio',
            'description.max' => 'Il campo "Descrizione" non può superare i :max caratteri',
            'creator_name.required' => 'Il campo "Autore" è obbligatorio',
            'creator_name.max' => 'Il campo "Autore" non può superare i :max caratteri'
        ];
    }
}
