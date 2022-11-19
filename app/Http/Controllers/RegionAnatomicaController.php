<?php

namespace App\Http\Controllers;

use App\Models\RegionAnatomica;
use App\Http\Requests\RegionAnatomica\StoreRegionAnatomicaRequest;
use App\Http\Requests\RegionAnatomica\UpdateRegionAnatomicaRequest;

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
     * @param  \App\Http\Requests\RegionAnatomica\StoreRegionAnatomicaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRegionAnatomicaRequest $request)
    {
        $data = $request->validated();

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
     * @param  \App\Http\Requests\RegionAnatomica\UpdateRegionAnatomicaRequest  $request
     * @param  \App\Models\RegionAnatomica  $region
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRegionAnatomicaRequest $request, RegionAnatomica $region)
    {
        $data = $request->validated();

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
