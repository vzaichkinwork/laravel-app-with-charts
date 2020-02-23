<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreFormRequest extends FormRequest
{
    /**
     * Authorization rules
     * @return bool
     */

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $gender = ['male', 'female'];

        return [
            'name'           => ['required', 'string', 'max:50', 'regex:/^[a-z0-9\-\' ]+$/i'],
            'family_name'    => ['required', 'string', 'max:50', 'regex:/^[a-zÀ-ÿ\-\' ]+$/i'],
            'age'            => ['required', 'integer', 'max:150'],
            'phone'          => ['required', 'string'],
            'average_salary' => ['required', 'integer', 'min:2000'],
            'gender'         => ['required', 'string', Rule::in($gender)],
            'birth_date'     => ['required', 'date'],
        ];
    }

    public function messages()
    {
        return [];
    }
}
