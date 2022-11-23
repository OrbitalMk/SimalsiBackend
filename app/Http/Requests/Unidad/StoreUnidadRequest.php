<?php

namespace App\Http\Requests\Unidad;

use Illuminate\Foundation\Http\FormRequest;

class StoreUnidadRequest extends FormRequest
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
            'nombre' => 'max:50|required',
            'municipio_id' => 'required',
            'telefono' => 'max:20|nullable',
        ];
    }
}
