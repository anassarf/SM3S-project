<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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

            'name'         =>   'required|max:50',
            'phone_number' =>   'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'email'        =>   'required|email|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
            'choice'       =>   'required|in:Securite,Office Cleaning,Spring Cleaning,Surveillance',
            'content'      =>   'required|min:50',
            'g-recaptcha-response' => 'required|recaptcha',

        ];
    }
}
