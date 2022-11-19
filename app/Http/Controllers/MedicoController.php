<?php

namespace App\Http\Controllers;

use App\Models\Medico;
use Illuminate\Http\Request;
use App\Http\Requests\Medico\StoreMedicoRequest;
use App\Http\Requests\Medico\UpdateMedicoRequest;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medico = Medico::paginate(5);
        return $medico;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Medico\StoreMedicoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMedicoRequest $request)
    {
        $data = $request->validated();
    
        return Medico::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function show(Medico $medico)
    {
        return $medico;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Medico\UpdateMedicoRequest  $request
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMedicoRequest $request, Medico $medico)
    {
        $data = $request->validated();

        $medico->update($data);

        return $medico;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medico $medico)
    {
        $medico->delete();
        return $medico;
    }
}
