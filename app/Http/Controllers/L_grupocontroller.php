<?php

namespace App\Http\Controllers;

use app\Models\L_grupo;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



use App\Http\Requests\StoreL_Especificacion;



class L_grupocontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query= DB::table('grupo_empresas')
        ->get();
        return view('L_grupo.createL_grupo',['listado'=>$query]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('L_grupo.createL_grupo');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\L_grupo  $L_grupo
     * @return \Illuminate\Http\Response
     */
    public function show(L_grupo $L_grupo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\L_grupo  $L_grupo
     * @return \Illuminate\Http\Response
     */
    public function edit(L_grupo $L_grupo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\L_grupo  $L_grupo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, L_grupo $L_grupo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\L_grupo  $L_grupo
     * @return \Illuminate\Http\Response
     */
    public function destroy(L_grupo $L_grupo)
    {
        //
    }
}
