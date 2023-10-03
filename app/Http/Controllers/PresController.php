<?php

namespace App\Http\Controllers;

use App\Models\Pres;
use Illuminate\Http\Request;
use Illuminate\Support\Farcades\DB;
use App\Http\Requests\SavePresRequest;

class PresController extends Controller {

    //Mostrar listados de Pres
    public function index(){

        $press = Pres::get();

        return view('press.index', ['press'=> $press]);
    }

    //Mostrar detalles del Pres
    public function show(Pres $pres){
        return view('press.show', ['pres' => $pres]);
    }

    //Mostrar formulario para crear Pres
    public function create(){

        return view('press.create', ['pres' => new Pres]);
    }

    //Almacenar el Pres en la base de datos
    public function store(SavePresRequest $request){

        Pres::create($request->validated());

        return to_route('press.index')->with('status','Prestamo Creado');
    }

    //Mostrar formulario para editar un Pres
    public function edit(Pres $press){
        return view('press.edit',['pres'=> $press]);
    }

    //Almacenar los cambios del Pres en la base de datos
    public function update(SavePresRequest $request, Pres $press){

        $press->update($request->validated());

        return to_route('press.index', $press)->with('status', 'Prestamo Actualizado');
    }

    //Eliminar Pres de la base de datos
    public function destroy(Pres $press){

        $press->delete();

        return to_route('press.index')->with('status', 'Prestamo Eliminado');
    }
}
