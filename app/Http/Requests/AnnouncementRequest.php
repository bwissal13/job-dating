<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnnouncementRequest extends FormRequest
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
            'title'=>'required|string',
            'description'=>'required|string',
            'date'=>'required|date',
            'company_id' => 'required|exists:companies,id', 
        ];
    }
    public function message(){
        return[
            'title.required'=>'Title is required',
            'title.string'=>'Title must be string',
            'description.required'=>'Description is required',
            'description.string'=>'Description must be a string',
            'date.required'=>'Date is required',
            'date.date'=>'Date format is 1999/01/15',
            'company_id.required'=>'Choose a Company',                    
        ];
    }
}
