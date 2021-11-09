<?php

namespace App\Http\Controllers;

use App\Models\planPagos;
use Illuminate\Http\Request;

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
    public function store(Request $request)
    {
        //
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
