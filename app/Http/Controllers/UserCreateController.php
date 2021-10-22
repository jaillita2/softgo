<?php

namespace App\Http\Controllers;

use App\Models\User_Create;
use Illuminate\Http\Request;

class UserCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('register.createUser');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('register.createUser');
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

        $datosUsers = request()->except('_token');
        User_Create::insert($datosUsers);
        return response()->json($datosUsers);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User_Create  $user_Create
     * @return \Illuminate\Http\Response
     */
    public function show(User_Create $user_Create)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User_Create  $user_Create
     * @return \Illuminate\Http\Response
     */
    public function edit(User_Create $user_Create)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User_Create  $user_Create
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User_Create $user_Create)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User_Create  $user_Create
     * @return \Illuminate\Http\Response
     */
    public function destroy(User_Create $user_Create)
    {
        //
    }
}
