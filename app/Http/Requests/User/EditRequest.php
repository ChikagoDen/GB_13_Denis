<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class EditRequest extends FormRequest
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
    // public function rules()
    // {
    //     return [
    //         //
    //     ];
    // }
    public function rules()
    {
        return [
            'name'=>['required','string','min:5'],
            'email'=>['required','string','min:5'],
            'is_admin'=>['integer'],
        ];
    }
    public function messages()
    {
        // return parent::messages();
    return [
        'required'             => 'Поле :name Очень очень обязательно для заполнения.',
    ];
    }
    public function attributes()
    {
        // return parent::attributes();
        return [
            'email'=>'Почта',
            'is_admin'=>'Администрация',
        ];
    }
}
