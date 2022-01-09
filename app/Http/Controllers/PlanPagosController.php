<?php

namespace App\Http\Controllers;

use App\Models\planPagos;
use Illuminate\Http\Request;

use App\Http\Requests\StorePlan;

class PlanPagosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('PlanPagos.createPlan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlan $request)
    {
        $datosPlan = request()->except('_token');

        if($request->hasfile('DOC_PLAN')){
            $datosPlan['DOC_PLAN']=$request->file('DOC_PLAN')->store('uploads','public');
        }
        planPagos::insert($datosPlan);
        session()-> flash('exito', 'El plan de pagos se registo de forma correcta');
        return redirect('Plani');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\planPagos  $planPagos
     * @return \Illuminate\Http\Response
     */
    public function show(planPagos $planPagos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\planPagos  $planPagos
     * @return \Illuminate\Http\Response
     */
    public function edit(planPagos $planPagos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\planPagos  $planPagos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, planPagos $planPagos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\planPagos  $planPagos
     * @return \Illuminate\Http\Response
     */
    public function destroy(planPagos $planPagos)
    {
        //
    }
}
