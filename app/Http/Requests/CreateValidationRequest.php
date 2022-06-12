<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateValidationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    // Kreiranje vlastite VALIDACIJE

    public function authorize()
    {
        return false; // Da bi koristili potrebno ju je staviti na true, inače je ODBIJENA
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'lecturer' => 'required',
            'drive_link' => 'required',
            'image_path' => 'required|mimes:jpg,png,jpeg|max:5048',
            'year' => 'required|integer'
        ];
    }
}
