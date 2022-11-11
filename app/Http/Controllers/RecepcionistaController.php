<?php

namespace App\Http\Controllers;

use App\Models\Recepcionista;
use Illuminate\Http\Request;

class RecepcionistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function index()
    {
        $recepcionista = Recepcionista::paginate(5);
        return $recepcionista;
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
            'cedula' => 'max:16|required|unique:recepcionistas',
            'telefono' => 'max:20|required',
        ]);
    
        return Recepcionista::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recepcionista  $recepcionista
     * @return \Illuminate\Http\Response
     */
    public function show(Recepcionista $recepcionista)
    {
        return $recepcionista;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recepcionista  $recepcionista
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recepcionista $recepcionista)
    {
        $data = $request->validate([
            'nombres' => 'max:50|required',
            'apellidos' => 'max:50|required',
            'cedula' => 'max:16|required|unique:recepcionistas,cedula,'.$recepcionista->user_id.',user_id',
            'telefono' => 'max:20|required',
        ]);

        $recepcionista->update($data);

        return $recepcionista;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recepcionista  $recepcionista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recepcionista $recepcionista)
    {
        $recepcionista->delete();
        return $recepcionista;
    }
}
