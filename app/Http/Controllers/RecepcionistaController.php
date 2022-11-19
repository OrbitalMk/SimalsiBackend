<?php

namespace App\Http\Controllers;

use App\Models\Recepcionista;
use App\Http\Requests\Recepcionista\StoreRecepcionistaRequest;
use App\Http\Requests\Recepcionista\UpdateRecepcionistaRequest;

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
     * @param  \App\Http\Requests\Recepcionista\StoreRecepcionistaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRecepcionistaRequest $request)
    {
        $data = $request->validated();
    
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
     * @param  \App\Http\Requests\Recepcionista\UpdateRecepcionistaRequest  $request
     * @param  \App\Models\Recepcionista  $recepcionista
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRecepcionistaRequest $request, Recepcionista $recepcionista)
    {
        $data = $request->validated();

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
