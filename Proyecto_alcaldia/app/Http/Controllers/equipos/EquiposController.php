<?php

namespace App\Http\Controllers\equipos;

use App\Http\Controllers\Controller;
use Egulias\EmailValidator\Warning\ObsoleteDTEXT;
use Illuminate\Http\Request;
use App\Models\equipos;

class EquiposController extends Controller
{
    public function index()
    {
        $equipos=equipos::all();
        return view('equipos.index',compact('equipos'));
    }
    public function create(){
        return view('equipos.create');
    }
    public function store(Request $request){
        $equipos=equipos::create($request->all());
        return redirect()->route('equipos.index');
    }
    public function show($id){
        $equipos=equipos::find($id);
        return view('equipos.show',compact('equipos'));
    }

    public function edit($id){
        $equipos=equipos::find($id);
        return view('equipos.edit',compact('equipos'));
    }

    public function update(Request  $request, $id){
        $equipos=equipos::find($id)->update($request->all());
        return redirect()->route('equipos.index');

    }
    public function destroy($id){
        $equipos=equipos::find($id)->delete();
        return redirect()->route('equipos.index');
    }


}
