<?php

namespace App\Http\Controllers;

use App\Models\Unidad;
use App\Http\Requests\Unidad\StoreUnidadRequest;
use App\Http\Requests\Unidad\UpdateUnidadRequest;

class UnidadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $unidad = Unidad::with('municipio.departamento')->paginate(5);
        return $unidad;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Unidad\StoreUnidadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUnidadRequest $request)
    {
        $data = $request->validated();

        return Unidad::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Unidad  $unidad
     * @return \Illuminate\Http\Response
     */
    public function show(Unidad $unidad)
    {
        return $unidad;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Unidad\UpdateUnidadRequest  $request
     * @param  \App\Models\Unidad  $unidad
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUnidadRequest $request, Unidad $unidad)
    {
        $data = $request->validated();

        $unidad->update($data);

        return $unidad;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Unidad  $unidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unidad $unidad)
    {
        $unidad->delete();
        return $unidad;
    }
}
