<?php

namespace App\Http\Controllers\localidades;

use App\Http\Controllers\Controller;
use App\Models\localidad;
use Illuminate\Http\Request;

class LocalidadesController extends Controller
{
    public function index()
    {
        $localidad=localidad::all();
        return view('localidades.index',compact('localidad'));
    }
    public function create(){
        return view('localidades.create');
    }
    public function store(Request $request){
        $localidad=localidad::create($request->all());
        return redirect()->route('localidades.index');
    }
    public function show($id){
        $localidad=localidad::find($id);
        return view('localidades.show',compact('localidad'));
    }

    public function edit($id){
        $localidad=localidad::find($id);
        return view('localidades.edit',compact('localidad'));
    }

    public function update(Request  $request, $id){
        $localidad=localidad::find($id)->update($request->all());
        return redirect()->route('localidades.index');

    }
    public function destroy($id){
        $localidad=localidad::find($id)->delete();
        return redirect()->route('localidades.index');
    }
}
