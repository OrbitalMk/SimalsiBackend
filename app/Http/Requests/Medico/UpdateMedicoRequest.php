<?php

namespace App\Http\Requests\Medico;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMedicoRequest extends FormRequest
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
            'codigo_sanitario' => 'max:8|required|unique:medicos,codigo_sanitario,'. $this->medico_id .',medico_id',
            'telefono' => 'max:20|nullable',
        ];
    }
}
