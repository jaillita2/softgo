<?php

namespace App\Http\Controllers;

use App\Models\Convocatoria;
use Illuminate\Http\Request;

use App\Http\Requests\StoreConvocatoria;

class AnnouncementController extends Controller
{
    
    public function create(){
        return view('register.createAnnouncement');
    }

    public function store(StoreConvocatoria $request){

        $datosConv = request()->except('_token');

        if($request->hasfile('DOC_CONV')){
            $datosConv['DOC_CONV']=$request->file('DOC_CONV')->store('uploads','public');
        }
        Convocatoria::insert($datosConv);
        session()-> flash('exito', 'Convocatoria guardada con exito');
        return redirect('/');


    }

}
