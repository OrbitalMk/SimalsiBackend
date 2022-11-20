<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \App\Models\SolicitudAnatomica;
use \App\Models\Solicitud;

class SolicitudAnatomicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudap = Solicitud::with('solicitud')->paginate(5);
        return $solicitudap;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return DB::transaction(function () use ($request) {
            $data = $request->validate([
                'fecha_muestra' => 'required|date_format:Y/m/d',
                'paciente_id' => 'required',
                'medico_id' => 'required',
                'user_id' => 'required',
                'unidad_id' => 'required',
            ]);

            $procedimiento = $request->validate([
                'procedimiento_id' => 'required'
            ]);

            $solicitud = Solicitud::create($data);

            DB::insert(
                'insert into solicitudap (solicitud_id, procedimiento_id) values (?, ?)',
                [$solicitud->solicitud_id, $procedimiento['procedimiento_id']]
            );

            return Solicitud::with('solicitud')->where('solicitud_id', $solicitud->solicitud_id)->get();
        });
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SolicitudAnatomica  $solicitudap
     * @return \Illuminate\Http\Response
     */
    public function show(SolicitudAnatomica $solicitudap)
    {
        return Solicitud::with('solicitud')->where('solicitud_id', $solicitudap->solicitud_id)->get();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SolicitudAnatomica  $solicitudap
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SolicitudAnatomica $solicitudap)
    {
        return DB::transaction(function () use ($request, $solicitudap) {
            $data = $request->validate([
                'fecha_muestra' => 'required',
                'paciente_id' => 'required',
                'medico_id' => 'required',
                'user_id' => 'required',
                'unidad_id' => 'required',
            ]);

            $procedimiento = $request->validate([
                'procedimiento_id' => 'required'
            ]);

            $solicitudap->solicitud->update($data);

            DB::update(
                'update solicitudap set procedimiento_id=? where solicitud_id=?',
                [$procedimiento['procedimiento_id'], $solicitudap->solicitud_id]
            );

            return Solicitud::with('solicitud')->where('solicitud_id', $solicitudap->solicitud_id)->get();
        });
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solicitud  $solicitudap
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitud $solicitudap)
    {
        $solicitudap->delete();
        return $solicitudap;
    }
}
