<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
public function create(){
return view('clientee.create');
}

public function client(Request $request){
$Cliente=new Cliente(); 
$Cliente->telefono=$request->telefono; 
$Cliente->codigo=$request->codigo;
$Cliente->num_social=$request->num_social; 
$Cliente->direccion=$request->direccion; 
$Cliente->save();
return $Cliente;
}

public function list(){
$clientee = Cliente::orderBy('id','desc')->get();
return view('clientee/list', compact('clientee'));
}
public function show($id){
$clientee=Cliente::find($id);  
return $clientee;
}

public function destroy(Cliente $clientee){
$clientee->delete();
return redirect()->route('clientee.list');
}

public function edit (Cliente $clientee){
return view('clientee.edit',compact('clientee'));
}

public function update(Request $request,Cliente $clientee ){
$clientee-> codigo=$request->codigo; 
$clientee-> telefono=$request->telefono;
$clientee-> num_social=$request->num_social; 
$clientee-> direccion=$request->direccion; 
$clientee->save();
return redirect()->route('clientee.list');
}
}
