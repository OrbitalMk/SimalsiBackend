<?php

namespace App\Http\Requests\Paciente;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePacienteRequest extends FormRequest
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
            'inss' => 'max:8|nullable|unique:pacientes,inss,'. $this->paciente_id .',paciente_id',
            'nacimiento' => 'required',
            'sexo' => 'required',
            'telefono' => 'max:20|required',
        ];
    }
}
