<?php

namespace App\Http\Requests\Recepcionista;

use Illuminate\Foundation\Http\FormRequest;

class StoreRecepcionistaRequest extends FormRequest
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
            'cedula' => 'max:16|required|unique:recepcionistas',
            'telefono' => 'max:20|required',
        ];
    }
}
