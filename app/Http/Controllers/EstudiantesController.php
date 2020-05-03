<?php

namespace App\Http\Controllers;

use App\estudiantes;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes = Estudiantes::all();

        return $estudiantes; //nos devuelve todos los estudiantes.
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add(Request $request)
    {

        $estudiantes = Estudiantes::create($request->all());
        return $estudiantes;
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function buscar($id)
    {

        $estudiantes = Estudiantes::find($id);
        return $estudiantes;
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function editar($id, Request $request)
    {
        $estudiantes = Estudiantes::find($id);
        $estudiantes->update($request->all());
        return $estudiantes;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\estudiantes  $estudiantes
     * @return \Illuminate\Http\Response
     */
    public function borrar($id)
    {
        $estudiantes = Estudiantes::find($id);
        $estudiantes->delete();
        return $estudiantes;
    }
}
