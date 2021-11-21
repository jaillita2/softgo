<?php

namespace App\Http\Controllers;

use App\Models\L_convocatorias;
use GuzzleHttp\Psr7\UploadedFile;
use store\app\public\uploads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



class L_convocatoriascontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query= DB::table('convocatorias')
        ->get();
        return view('L_convocatorias.createL_convocatorias',['listado'=>$query]);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('L_convocatorias.createL_convocatorias');

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
     * @param  \App\Models\L_convocatorias  $L_convocatorias
     * @return \Illuminate\Http\Response
     */
    public function show(L_convocatorias $L_convocatorias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\L_convocatorias  $L_convocatorias
     * @return \Illuminate\Http\Response
     */
    public function edit(L_convocatorias $L_convocatorias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\L_convocatorias  $L_convocatorias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, L_convocatorias $L_convocatorias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\L_convocatorias  $L_convocatorias
     * @return \Illuminate\Http\Response
     */
    public function destroy(L_convocatorias $L_convocatorias)
    {
        //
    }
}
