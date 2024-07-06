<?php

namespace App\Http\Controllers;
use App\Models\Jugador;
use Illuminate\Http\Request;

class JugadorController extends Controller
{

public function create(){
return view('jugadorr.create');
}

public function player(Request $request){
$Jugador=new Jugador(); 
$Jugador->codigo=$request->codigo; 
$Jugador->fecha_de_nacimiento=$request->fecha_de_nacimiento;
$Jugador->nombre=$request->nombre; 
$Jugador->posicion=$request->posicion; 
$Jugador->save();
return $Jugador;
}

public function list(){
$jugadorr = Jugador::orderBy('id','desc')->get();
return view('jugadorr/list', compact('jugadorr'));
}
public function show($id){
$jugadorr=Jugador::find($id);  
return $jugadorr;
}

public function destroy(Jugador $jugadorr){
$jugadorr->delete();
return redirect()->route('jugadorr.list');
}

public function edit (Jugador $jugadorr){
return view('jugadorr.edit',compact('jugadorr'));
}

public function update(Request $request,Jugador $jugadorr ){
$jugadorr-> codigo=$request->codigo; 
$jugadorr-> fecha_de_nacimiento=$request->fecha_de_nacimiento;
$jugadorr-> nombre=$request->nombre; 
$jugadorr-> posicion=$request->posicion; 
$jugadorr->save();
return redirect()->route('jugadorr.list');
}

}

