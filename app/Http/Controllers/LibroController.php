<?php

namespace App\Http\Controllers;

use App\Libro;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libros = Libro::all();
        return view("admin.libros.index", compact("libros"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.libros.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = Carbon::now();
        Libro::create([
            'codigo' => $request->codigo,
            'titulo' => $request->titulo,
            'ejemplares' => $request->ejemplares,
            'fecregistro' => $date->format("Y-m-d")
        ]);

        return redirect()->route("libros.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show($libroid)
    {
         $libro = Libro::findOrFail($libroid);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function edit(Libro $libro)
    {
        return view("admin.libros.edit", compact("libro"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $libroid)
    {
        $libro = Libro::findOrFail($libroid);
        $libro->ejemplares = $request->ejemplares;
        $libro->codigo = $request->codigo;
        $libro->titulo = $request->titulo;
        $libro->update();

        return redirect()->route("libros.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function destroy($libroid)
    {
        $libro = Libro::findOrFail($libroid);
        $libro->delete();
        //return redirect()->route("carreras.index");
        echo "1";
    }
}
