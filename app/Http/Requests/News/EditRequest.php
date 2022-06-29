<?php
declare(strict_types=1);
namespace App\Http\Requests\News;

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
    public function rules()
    {
        return [
            'Title'=>['required','string','min:5'],
            'Avtor'=>['required','string','min:5']
        ];
    }
    public function messages()
    {
        // return parent::messages();
    return [
        'required'             => 'Поле :attribute Очень очень обязательно для заполнения.',
    ];
    }
    public function attributes()
    {
        // return parent::attributes();
        return [
            'Title'=>'Супер заголовок',
            'Avtor'=>'Мега автор',
        ];
    }
}
