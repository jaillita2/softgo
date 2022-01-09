<?php

namespace App\Http\Controllers;

use App\Models\materialApoyo;
use Illuminate\Http\Request;

use App\Http\Requests\StoreMaterial;

class MaterialApoyoController extends Controller
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
        return view('MaterialApoyo.createMaterial');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMaterial $request)
    {
        $datosApo = request()->except('_token');

        if($request->hasfile('DOC_APO')){
            $datosApo['DOC_APO']=$request->file('DOC_APO')->store('uploads','public');
        }
        materialApoyo::insert($datosApo);
        session()-> flash('exito', 'Se guardo el material de apoyo');
        return redirect('/student');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\materialApoyo  $materialApoyo
     * @return \Illuminate\Http\Response
     */
    public function show(materialApoyo $materialApoyo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\materialApoyo  $materialApoyo
     * @return \Illuminate\Http\Response
     */
    public function edit(materialApoyo $materialApoyo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\materialApoyo  $materialApoyo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, materialApoyo $materialApoyo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\materialApoyo  $materialApoyo
     * @return \Illuminate\Http\Response
     */
    public function destroy(materialApoyo $materialApoyo)
    {
        //
    }
}
