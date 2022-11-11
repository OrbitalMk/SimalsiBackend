<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unidad;

class UnidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidad = Unidad::paginate(10);
        return $unidad;
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
     * @param  App\Models\Unidad  $unidad
     * @return \Illuminate\Http\Response
     */
    public function show(Unidad $unidad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Unidad  $unidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Unidad $unidad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Unidad  $unidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Unidad $unidad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Unidad  $unidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unidad $unidad)
    {
        $unidad?->delete();
        return $unidad;
    }
}
