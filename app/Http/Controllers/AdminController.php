<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Farcades\DB;
use App\Http\Requests\SaveAdminRequest;

class AdminController extends Controller {

    //Mostrar listados de Admin
    public function index(){

        $admins = Admin::get();

        return view('admins.index', ['admins'=> $admins]);
    }

    //Mostrar detalles del Admin
    public function show(Admin $admin){
        return view('admins.show', ['admin' => $admin]);
    }

    //Mostrar formulario para crear Admin
    public function create(){

        return view('admins.create', ['admin' => new Admin]);
    }

    //Almacenar el Admin en la base de datos
    public function store(SaveAdminRequest $request){

        Admin::create($request->validated());

        return to_route('admins.index')->with('status','Administrador Creado');
    }

    //Mostrar formulario para editar un Admin
    public function edit(Admin $admins){
        return view('admins.edit',['admin'=> $admins]);
    }

    //Almacenar los cambios del Admin en la base de datos
    public function update(SaveAdminRequest $request, Admin $admins){

        $admins->update($request->validated());

        return to_route('admins.index', $admins)->with('status', 'Administrador Actualizado');
    }

    //Eliminar Admin de la base de datos
    public function destroy(Admin $admins){

        $admins->delete();

        return to_route('admins.index')->with('status', 'Administrador Eliminado');
    }
}
