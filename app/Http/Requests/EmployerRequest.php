<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class EmployerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // only allow updates if the user is logged in
        return backpack_auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
             'company_name' => 'required|min:5|max:255',
             'company_size' => 'required|min:5|max:255',
            'tax' => 'required|min:5|max:255',
            'website' => 'required|min:5|max:255',
            'company_summary' => 'required|min:5|max:255',
            'company_logo' => 'required|min:5|max:255',
            'contact_name' => 'required|min:5|max:255',
            'position' => 'required|min:5|max:255',
            'company_address' => 'required|min:5|max:255',
            'company_phone' => 'required|min:5|max:255',
        ];
    }

    /**
     * Get the validation attributes that apply to the request.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            //
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array
     */
    public function messages()
    {
        return [
            //
        ];
    }
}
