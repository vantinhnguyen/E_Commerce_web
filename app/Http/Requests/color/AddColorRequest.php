<?php

namespace App\Http\Requests\color;

use Illuminate\Foundation\Http\FormRequest;


class AddColorRequest extends FormRequest
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
            'name'=> ['required','unique:colors']
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Tên màu không được để trống!',
            'name.unique'=>"Màu $this->name đã tồn tại!"
        ];
    }
}
