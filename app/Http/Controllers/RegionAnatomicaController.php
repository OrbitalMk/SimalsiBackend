<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RegionAnatomica;

class RegionAnatomicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $region = RegionAnatomica::paginate(5);
        return $region;
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
            'descripcion' => 'max:50|required',
        ]);

        return RegionAnatomica::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegionAnatomica  $region
     * @return \Illuminate\Http\Response
     */
    public function show(RegionAnatomica $region)
    {
        return $region;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegionAnatomica  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegionAnatomica $region)
    {
        $data = $request->validate([
            'descripcion' => 'max:50|required',
        ]);

        $region->update($data);

        return $region;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegionAnatomica  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegionAnatomica $region)
    {
        $region->delete();
        return $region;
    }
}
