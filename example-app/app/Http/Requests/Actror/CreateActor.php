<?php

namespace Actror;

use Illuminate\Foundation\Http\FormRequest;

class CreateActor extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'min:1', 'max:255'],
            'surname' => ['required', 'min:1', 'max:255'],
            'patronymic' => ['required', 'min:1', 'max:255'],
            'data' => ['required', 'numeric'],
            'height' => ['required', 'numeric'],
        ];
    }
}
