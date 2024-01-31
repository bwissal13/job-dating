<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'name'=>'required|string',
            'domain'=>'required|string',
            'contact'=>'required|string',
    
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'vous devez remplir le champ du titre',
            'name.string'=>'le champ nom doit être une chaîne de caractères.',
            'domain.required' => 'Le champ domain est requis.',
            'domain.string' => 'Le champ domain doit être une chaîne de caractères.',
            'contact.required' => 'Le champ contact est requis.',
            'contact.string' => 'Le champ contact doit être une chaîne de caractères.',
        ];
    }
}
