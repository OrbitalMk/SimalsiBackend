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
     * @param  App\Models\Patologo  $patologo
     * @return \Illuminate\Http\Response
     */
    public function show(Patologo $patologo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Patologo  $patologo
     * @return \Illuminate\Http\Response
     */
    public function edit(Patologo $patologo)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\Patologo  $patologo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patologo $patologo)
    {
        $patologo?->delete();
        return $patologo;
    }
}
