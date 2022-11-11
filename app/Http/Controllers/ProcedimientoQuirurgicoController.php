<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProcedimientoQuirurgico;

class ProcedimientoQuirurgicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procedimiento = ProcedimientoQuirurgico::paginate(5);
        return $procedimiento;
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
            'descripcion' => 'max:30|required',
            'region_id' => 'required',
        ]);

        return ProcedimientoQuirurgico::create($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProcedimientoQuirurgico  $procedimiento
     * @return \Illuminate\Http\Response
     */
    public function show(ProcedimientoQuirurgico $procedimiento)
    {
        return $procedimiento;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProcedimientoQuirurgico  $procedimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProcedimientoQuirurgico $procedimiento)
    {
        $data = $request->validate([
            'descripcion' => 'max:50|required',
            'region_id' => 'required',
        ]);

        $procedimiento->update($data);

        return $procedimiento;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProcedimientoQuirurgico  $procedimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProcedimientoQuirurgico $procedimiento)
    {
        $procedimiento->delete();
        return $procedimiento;
    }
}
