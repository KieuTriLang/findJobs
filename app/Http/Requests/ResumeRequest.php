<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Foundation\Http\FormRequest;

class ResumeRequest extends FormRequest
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
            'avatar_resume' => 'required|min:5|max:255',
            'post_code' => 'required|min:5|max:255',
            'cv_name' => 'required|min:5|max:255',
            'name' => 'required|min:5|max:255',
            'career_name' => 'required|min:5|max:255',
            'email' => 'required|min:5|max:255',
            'phone_num' => 'required|min:5|max:255',
            'birthday' => 'required|min:5|max:255',
            'address' => 'required|min:5|max:255',
            'career_target' => 'required|min:5|max:255',
            'work_exp' => 'required|min:5|max:255',
            'education' => 'required|min:5|max:255',
            'activities' => 'required|min:5|max:255',
            'awards' => 'required|min:5|max:255',
            'reference' => 'required|min:5|max:255',
            'certificate' => 'required|min:5|max:255',
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
