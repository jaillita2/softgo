<?php

namespace App\Http\Controllers;

use App\Models\Convocatoria;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function create(){
        return view('register.createAnnouncement');
    }

    public function store(Request $request){
        $CONVOCATORIA = new Convocatoria();
        $CONVOCATORIA->TITULO_CONV=$request->TITULO_CONV;
        $CONVOCATORIA->FECHA_CONV=$request->FECHA_CONV;
        $CONVOCATORIA->SEMESTRE_CONV=$request->SEMESTRE_CONV;
        $CONVOCATORIA->DESCRIP_CONV=$request->DESCRIP_CONV;
        $CONVOCATORIA->DOC_CONV=$request->DOC_CONV;

        $CONVOCATORIA->save();
        return redirect('/');


    }

}
