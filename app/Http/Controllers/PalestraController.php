<?php

namespace App\Http\Controllers;


use App\Models\Palestra;

use App\Models\Escola;

use App\http\Requests\PalestraRequest;

use Illuminate\Support\Facades\DB;

class PalestraController extends Controller
{
    public function index()
    {
        $escola = Escola::all();
        $palestra =  Palestra::all();
        return view('palestra.index', compact('palestra','escola'));

    }
    
    public function certi()
    {
        $escola = Escola::all();
        $palestra =  Palestra::all();
        
        return view('certificado.create', compact('escola','palestra'));
    }
    


    public function create()
    {
        $palestra = Palestra::all();
        $escola = Escola::all();
        return view('palestra.create', compact('palestra','escola'));
    }


    public function store(PalestraRequest $request)
    {
        $palestra = new Palestra();
        $palestra->tema = $request->input('tema');
        $palestra->palestrante = $request->input('palestrante');         
        $palestra->escola_id = $request->input('escola_id');
        $palestra->periodo = $request->input('periodo');
        $palestra->data = $request->input('date');
        $palestra->cidade = $request->input('cidade');
        $palestra->horas = $request->input('horas');

        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName());

            $requestImage->move(public_path('img/fotos'), $imageName);

            $palestra->image = $imageName;

        }
        $palestra->save();
        return redirect()->route('palestra.index', compact('palestra'));
    }




    public function edit($id)
    {
        $escola = Escola::all();
        $palestra = Palestra::find($id);
        if (isset($palestra)) {
            return view('palestra.edit', compact('palestra','escola'));
        }
        return view('palestra.index');
    }


    public function update(PalestraRequest $request, $id)
    {
        $palestra = Palestra::find($id);
        if (isset($palestra)) {

            $palestra->tema = $request->input('tema');
            $palestra->palestrante = $request->input('palestrante');            
            $palestra->escola_id = $request->input('escola_id');
            $palestra->periodo = $request->input('periodo');
            $palestra->data = $request->input('date');
            $palestra->cidade = $request->input('cidade');
            $palestra->horas = $request->input('horas');
            $palestra->save();
        }
        return redirect()->route('palestra.index', compact('palestra'));
    }


    public function destroy($id)
    {
        $palestra = Palestra::find($id);
        if (isset($palestra)) {

            $palestra->delete();
        }
        return redirect()->route('palestra.index');
    }

   
}