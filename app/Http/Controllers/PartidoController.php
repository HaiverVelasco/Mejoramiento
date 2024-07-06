<?php

namespace App\Http\Controllers;
use App\Models\Partido;
use Illuminate\Http\Request;

class PartidoController extends Controller
{
public function create(){
return view('partidoo.create');
}

public function game(Request $request){
$Partido=new Partido();
$Partido->goles_casa=$request->goles_casa; 
$Partido->goles_fuera=$request->goles_fuera; 
$Partido->fecha=$request->fecha; 
$Partido->codigo=$request->codigo; 
$Partido->save();
return $Partido;
}

public function list(){
$partidoo = Partido::orderBy('id','desc')->get();
return view('partidoo/list', compact('partidoo'));
}

public function show($id){
$partidoo=Partido::find($id);  
return $partidoo;
}

public function destroy(Partido $partidoo){
$partidoo->delete();
return redirect()->route('partidoo.list');
}

public function edit (Partido $partidoo){
return view('partidoo.edit',compact('partidoo'));
}

public function update(Request $request,Partido $partidoo ){
$partidoo-> goles_casa=$request->goles_casa; 
$partidoo-> goles_fuera=$request->goles_fuera; 
$partidoo-> fecha=$request->fecha; 
$partidoo-> codigo=$request->codigo; 
$partidoo->save();
return redirect()->route('partidoo.list');
}

}
