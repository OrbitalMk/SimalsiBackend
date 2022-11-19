<?php

namespace App\Http\Controllers;

use App\Models\ProcedimientoQuirurgico;
use App\Http\Requests\ProcedimientoQuirurgico\StoreProcedimientoQuirurgico;
use App\Http\Requests\ProcedimientoQuirurgico\UpdateProcedimientoQuirurgico;

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
     * @param  \App\Http\Requests\ProcedimientoQuirurgico\StoreProcedimientoQuirurgico  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProcedimientoQuirurgico $request)
    {
        $data = $request->validated();

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
     * @param  \App\Http\Requests\ProcedimientoQuirurgico\UpdateProcedimientoQuirurgico  $request
     * @param  \App\Models\ProcedimientoQuirurgico  $procedimiento
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProcedimientoQuirurgico $request, ProcedimientoQuirurgico $procedimiento)
    {
        $data = $request->validated();

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
