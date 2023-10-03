<?php

namespace App\Http\Controllers;

use App\Models\Cel;
use Illuminate\Http\Request;
use Illuminate\Support\Farcades\DB;
use App\Http\Requests\SaveCelRequest;

class CelController extends Controller {

    //Mostrar listados de Cel
    public function index(){

        $cels = Cel::get();

        return view('cels.index', ['cels'=> $cels]);
    }

    //Mostrar detalles del Cel
    public function show(Cel $cel){
        return view('cels.show', ['cel' => $cel]);
    }

    //Mostrar formulario para crear Cel
    public function create(){

        return view('cels.create', ['cel' => new Cel]);
    }

    //Almacenar el Cel en la base de datos
    public function store(SaveCelRequest $request){

        Cel::create($request->validated());

        return to_route('cels.index')->with('status','Celador Creado');
    }

    //Mostrar formulario para editar un Cel
    public function edit(Cel $cels){
        return view('cels.edit',['cel'=> $cels]);
    }

    //Almacenar los cambios del Cel en la base de datos
    public function update(SaveCelRequest $request, Cel $cels){

        $cels->update($request->validated());

        return to_route('cels.index', $cels)->with('status', 'Celador Actualizado');
    }

    //Eliminar Cel de la base de datos
    public function destroy(Cel $cels){

        $cels->delete();

        return to_route('cels.index')->with('status', 'Celador Eliminado');
    }
}
