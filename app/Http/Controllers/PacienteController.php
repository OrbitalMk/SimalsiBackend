<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paciente = Paciente::paginate(5);
        return $paciente;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombres' => 'max:50|required',
            'apellidos' => 'max:50|required',
            'nacimiento' => 'required|date_format:Y/m/d',
            'inss' => 'max:8|nullable|unique:pacientes',
            'telefono' => 'max:20|nullable',
            'sexo' => 'required',
        ]);

        return Paciente::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        return $paciente;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        $data = $request->validate([
            'nombres' => 'max:50|required',
            'apellidos' => 'max:50|required',
            'inss' => 'max:8|nullable|unique:pacientes,inss,'.$paciente->paciente_id.',paciente_id',
            'nacimiento' => 'required',
            'sexo' => 'required',
            'telefono' => 'max:20|nullable',
        ]);

        $paciente->update($data);

        return $paciente;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return $paciente;
    }
}
