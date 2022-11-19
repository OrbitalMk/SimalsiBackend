<?php

namespace App\Http\Requests\Paciente;

use Illuminate\Foundation\Http\FormRequest;

class StorePacienteRequest extends FormRequest
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
            'nacimiento' => 'required|date_format:Y/m/d',
            'inss' => 'max:8|nullable|unique:pacientes',
            'telefono' => 'max:20|nullable',
            'sexo' => 'required',
        ];
    }
}
