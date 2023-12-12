<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title"=>"required|max:70",
            "description"=>"required",
            "type_id"=>"required",
            "technology_id"=>"required"
        ];
    }

    public function messages(){
        return[
            "title.required" => "Il titolo è obbligatorio",
            "description.required" => "La descrizione è obbligatoria",
            "type_id.required"=>"Devi selezzionare una tipologia",
            "technology_id.required"=>"Devi selezzionare una tecnhologia"


        ];
    }
}
