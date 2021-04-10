<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostJobRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'hire_position'=>'required',
            'company_name'=>'required',
            'description'=>'required',
            'salary'=> 'required',
            'location'=>'required',
            'benefit'=> 'required'
        ];
    }
}
