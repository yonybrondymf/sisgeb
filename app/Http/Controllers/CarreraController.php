<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carrera;


class CarreraController extends Controller
{
    
    public function index(){
    	$carreras = Carrera::where("estado",1)->get();
        return view("admin.carreras.index", compact("carreras"));
    }

    public function create(){
        return view("admin.carreras.create");
    }

    public function store(Request $request){
    	Carrera::create([
    		'carrera' => $request->carrera,
    		'estado' => 1
    	]);

    	return redirect()->route("carreras.index");
    }

    public function edit(Carrera $carrera){
        return view("admin.carreras.edit", compact("carrera"));
    }

    public function show($carreraid){
        $carrera = Carrera::findOrFail($carreraid);

    }

    public function update(Request $request, $carreraid){
        $carrera = Carrera::findOrFail($carreraid);
        $carrera->carrera = $request->carrera;
        $carrera->update();

        return redirect()->route("carreras.index");
    }

    public function destroy($carreraid){
        $carrera = Carrera::findOrFail($carreraid);
        $carrera->delete();
        //return redirect()->route("carreras.index");
        echo "1";
    }
}
