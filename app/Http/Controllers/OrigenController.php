<?php

namespace App\Http\Controllers;
use App\Models\Origen;
use Illuminate\Http\Request;

class OrigenController extends Controller
{
    
public function create(){
return view('viajee.create');
}

public function travel(Request $request){
$Origen=new Origen(); 
$Origen->codigo=$request->codigo; 
$Origen->nombre=$request->nombre;
$Origen->otros_datos=$request->otros_datos;  
$Origen->save();
return $Origen;
}

public function list(){
$viajee = Origen::orderBy('id','desc')->get();
return view('viajee/list', compact('viajee'));
}

public function show($id){
$viajee=Origen::find($id);  
return $viajee;
}

public function destroy(Origen $viajee){
$viajee->delete();
return redirect()->route('viajee.list');
}

public function edit (Origen $viajee){
return view('viajee.edit',compact('viajee'));
} 

public function update(Request $request,Origen $viajee ){
$viajee-> codigo=$request->codigo; 
$viajee-> nombre=$request->nombre;
$viajee-> otros_datos=$request->otros_datos;  
$viajee->save();
return redirect()->route('viajee.list');
}

}
   
 

