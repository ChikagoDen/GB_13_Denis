<?php
declare(strict_types=1);
namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CreateCategory extends FormRequest
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
            'id'=>['integer'],
            'Discription'=>['required','string','min:5'],
        ];
    }
    public function messages()
    {
        return parent::messages();
    }
    public function attributes()
    {
        return parent::attributes();
    }
}
