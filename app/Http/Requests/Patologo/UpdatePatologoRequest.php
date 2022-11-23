<?php

namespace App\Http\Requests\Patologo;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePatologoRequest extends FormRequest
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
            'nombres' => 'max:50|required',
            'apellidos' => 'max:50|required',
            'codigo_sanitario' => 'max:8|required|unique:patologos,codigo_sanitario,'. $this->patologo_id .',patologo_id',
            'telefono' => 'max:20|nullable',
        ];
    }
}
