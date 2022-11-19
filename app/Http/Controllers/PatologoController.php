<?php

namespace App\Http\Controllers;

use App\Models\Patologo;
use App\Http\Requests\Patologo\StorePatologoRequest;
use App\Http\Requests\Patologo\UpddatePatologoRequest;

class PatologoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patologo = Patologo::paginate(5);
        return $patologo;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Patologo\StorePatologoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatologoRequest $request)
    {
        $data = $request->validated();
    
        return Patologo::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patologo  $patologo
     * @return \Illuminate\Http\Response
     */
    public function show(Patologo $patologo)
    {
        return $patologo;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Patologo\UpddatePatologoRequest  $request
     * @param  \App\Models\Patologo  $patologo
     * @return \Illuminate\Http\Response
     */
    public function update(UpddatePatologoRequest $request, Patologo $patologo)
    {
        $data = $request->validated();

        $patologo->update($data);

        return $patologo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patologo  $patologo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patologo $patologo)
    {
        $patologo->delete();
        return $patologo;
    }
}
