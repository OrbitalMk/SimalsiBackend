<?php

namespace App\Http\Controllers;

use App\Models\Recepcionista;
use Illuminate\Http\Request;

/*
El articulo científico (Evaluación del rendimiento de base de datos NoSQL) es de enfoque cuantitativo,
ya que en el se realizaron pruebas de rendimiento de los distintos tipos de base de datos NoSQL,
obteniendo como muestra datos numéricos y con ello poder realizar análisis estadísticos para obtener
información, y así llegar a ciertas conclusiones que nos permitan confirmar o refutar las hipótesis.
*/

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recepcionista  $recepcionista
     * @return \Illuminate\Http\Response
     */
    public function show(Recepcionista $recepcionista)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recepcionista  $recepcionista
     * @return \Illuminate\Http\Response
     */
    public function edit(Recepcionista $recepcionista)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recepcionista  $recepcionista
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recepcionista $recepcionista)
    {
        $recepcionista?->delete();
        return $recepcionista;
    }
}
