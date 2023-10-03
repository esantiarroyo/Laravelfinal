<?php

namespace App\Http\Controllers;

use App\Models\Ins;
use Illuminate\Http\Request;
use Illuminate\Support\Farcades\DB;
use App\Http\Requests\SaveInsRequest;

class InsController extends Controller {

    //Mostrar listados de Ins
    public function index(){

        $inss = Ins::get();

        return view('inss.index', ['inss'=> $inss]);
    }

    //Mostrar detalles del Ins
    public function show(Ins $ins){
        return view('inss.show', ['ins' => $ins]);
    }

    //Mostrar formulario para crear Ins
    public function create(){

        return view('inss.create', ['ins' => new Ins]);
    }

    //Almacenar el Ins en la base de datos
    public function store(SaveInsRequest $request){

        Ins::create($request->validated());

        return to_route('inss.index')->with('status','Instructor Creado');
    }

    //Mostrar formulario para editar un Ins
    public function edit(Ins $inss){
        return view('inss.edit',['ins'=> $inss]);
    }

    //Almacenar los cambios del Ins en la base de datos
    public function update(SaveInsRequest $request, Ins $inss){

        $inss->update($request->validated());

        return to_route('inss.index', $inss)->with('status', 'Instructor Actualizado');
    }

    //Eliminar Ins de la base de datos
    public function destroy(Ins $inss){

        $inss->delete();

        return to_route('inss.index')->with('status', 'Instructor Eliminado');
    }
}
