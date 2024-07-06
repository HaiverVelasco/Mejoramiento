<?php

namespace App\Http\Controllers;
use App\Models\Viajero;
use Illuminate\Http\Request;

class ViajeroController extends Controller
{
    
public function create(){
return view('viajeroo.create');
}

public function traveler(Request $request){
$Viajero=new Viajero(); 
$Viajero->DNI=$request->DNI; 
$Viajero->nombre=$request->nombre;
$Viajero->direccion=$request->direccion;
$Viajero->telefono=$request->telefono;
$Viajero->save();
return $Viajero;
}

public function list(){
$viajeroo = Viajero::orderBy('id','desc')->get();
return view('viajeroo/list', compact('viajeroo'));
}

public function show($id){
$viajeroo=Viajero::find($id);  
return $viajeroo;
}

public function destroy(Viajero $viajeroo){
$viajeroo->delete();
return redirect()->route('viajeroo.list');
}

public function edit (Viajero $viajeroo){
return view('viajeroo.edit',compact('viajeroo'));
} 

public function update(Request $request,Viajero $viajeroo ){
$viajeroo->DNI=$request->DNI; 
$viajeroo->nombre=$request->nombre;  
$viajeroo->direccion=$request->direccion;
$viajeroo->telefono=$request->telefono;    
$viajeroo->save();
return redirect()->route('viajeroo.list');
}

}
