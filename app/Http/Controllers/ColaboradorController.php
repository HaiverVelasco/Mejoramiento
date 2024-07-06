<?php

namespace App\Http\Controllers;
use App\Models\Colaborador;
use Illuminate\Http\Request;

class ColaboradorController extends Controller
{
public function create(){
return view('colaboo.create');
}

public function helper(Request $request){
$Colaborador=new Colaborador(); 
$Colaborador->NIF=$request->NIF; 
$Colaborador->nombre=$request->nombre;
$Colaborador->save();
return $Colaborador;
}

public function list(){
$colaboo = Colaborador::orderBy('id','desc')->get();
return view('colaboo/list', compact('colaboo'));
}
public function show($id){
$colaboo=Colaborador::find($id);  
return $colaboo;
}

public function destroy(Colaborador $colaboo){
$colaboo->delete();
return redirect()->route('colaboo.list');
}

public function edit (Colaborador $colaboo){
return view('colaboo.edit',compact('colaboo'));
}

public function update(Request $request,Colaborador $colaboo ){
$colaboo-> NIF=$request->NIF; 
$colaboo-> nombre=$request->nombre;
$colaboo->save();
return redirect()->route('colaboo.list');
}
}
