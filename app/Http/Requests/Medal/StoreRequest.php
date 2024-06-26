<?php

namespace App\Http\Requests\Medal;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'posision' => 'required|numeric', 
            'id_olympic' => 'required',
            'id_sport' => 'required',
            'id_athlete' => 'required',
           
            'id_country' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'posision.required' => 'Rankings cannot be empty !!!',
            'id_sport.required' => 'Sport cannot be empty !!!',
            'id_olympic.required' => 'Olympic cannot be empty !!!',
            'id_athlete.required' => 'Athlete cannot be empty !!!',
           
            'id_country.required' => 'Country cannot be empty !!!',

            'country.required' => 'Country cannot be empty !!!',

            'posision.numeric' => 'Rankings must be numeric !!!',
            'posision.unique' => 'This rank is already in use, please re-enter another position'
        ];
    }
}
