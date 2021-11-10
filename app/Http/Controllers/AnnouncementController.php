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
        $datosConv = request()->except('_token');

        if($request->hasfile('DOC_CONV')){
            $datosConv['DOC_CONV']=$request->file('DOC_CONV')->store('uploads','public');
        }
        Convocatoria::insert($datosConv);
        return response()->json($datosConv);
        

    }

}
