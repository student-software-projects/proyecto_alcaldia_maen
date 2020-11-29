<?php

namespace App\Http\Controllers\localidades;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Localidad;


class LocalidadesController extends Controller
{
    public function index()
    {
        $localidad=Localidad::all();
        return view('localidades.index',compact('localidad'));
    }
    public function create(){
        return view('localidades.create');
    }
    public function store(Request $request){
        $localidad=Localidad::create($request->all());
        return redirect()->route('localidades.index');
    }
    public function show($id){
        $localidad=Localidad::find($id);
        return view('localidades.show',compact('localidad'));
    }

    public function edit($id){
        $localidad=Localidad::find($id);
        return view('localidades.edit',compact('localidad'));
    }

    public function update(Request  $request, $id){
        $localidad=Localidad::find($id)->update($request->all());
        return redirect()->route('localidades.index');

    }
    public function destroy($id){
        $localidad=Localidad::find($id)->delete();
        return redirect()->route('localidades.index');
    }
}
