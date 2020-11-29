<?php

namespace App\Http\Controllers\jugadores;

use App\Http\Controllers\Controller;
use App\Models\jugadores;
use Illuminate\Http\Request;

class JugadoresController extends Controller
{
    public function index()
    {
        $jugadores=jugadores::all();
        return view('jugadores.index',compact('jugadores'));
    }
    public function create(){
        return view('jugadores.create');
    }
    public function store(Request $request){
        $jugadores=jugadores::create($request->all());
        return redirect()->route('localidades.index');
    }
    public function show($id){
        $jugadores=jugadores::find($id);
        return view('localidades.show',compact('jugadores'));
    }

    public function edit($id){
        $jugadores=jugadores::find($id);
        return view('jugadores.edit',compact('jugadores'));
    }

    public function update(Request  $request, $id){
        $jugadores=jugadores::find($id)->update($request->all());
        return redirect()->route('jugadores.index');

    }
    public function destroy($id){
        $jugadores=jugadores::find($id)->delete();
        return redirect()->route('jugadores.index');
    }
}
