<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patologo;

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'nombres' => 'max:50|required',
            'apellidos' => 'max:50|required',
            'codigo_sanitario' => 'max:8|required|unique:patologos',
            'telefono' => 'max:20|required',
        ]);
    
        return Patologo::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  App\Models\Patologo  $patologo
     * @return \Illuminate\Http\Response
     */
    public function show(Patologo $patologo)
    {
        return $patologo;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  App\Models\Patologo  $patologo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patologo $patologo)
    {
        $data = $request->validate([
            'nombres' => 'max:50|required',
            'apellidos' => 'max:50|required',
            'codigo_sanitario' => 'max:8|required|unique:patologos,codigo_sanitario,'.$patologo->patologo_id.',patologo_id',
            'telefono' => 'max:20|required',
        ]);

        $patologo->update($data);

        return $patologo;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Patologo  $patologo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patologo $patologo)
    {
        $patologo->delete();
        return $patologo;
    }
}
