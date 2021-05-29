<?php

namespace App\Http\Controllers;

use App\Models\certificado;
use App\Models\Escola;

use App\http\Requests\CertRequest;


class CertificadoController extends Controller
{
  
    public function index()
    {
        $escola = Escola::all();
        $certificado = certificado::all();
        return view('certificado.index', compact('certificado','escola'));
    }

    
    public function create()
    {
        $certificado = certificado::all();
        return view('certificado.create', compact('certificado'));
    }

    
    public function store(CertRequest $request)
    {
        $certificado = new certificado();
        $certificado->nome = $request->input('nome');
        $certificado->palestrante = $request->input('palestrante');
        $certificado->tema = $request->input('tema');
        $certificado->data = $request->input('data');
        $certificado->horario = $request->input('horario');
        $certificado->diretor = $request->input('diretor');
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName());

            $requestImage->move(public_path('img/fotos_certificado'), $imageName);

            $certificado->image = $imageName;

        }
        $certificado->save();
        return redirect()->route('certificado.index', compact('certificado'));
    }

    
    public function show($id)
    {
        $escola = Escola::all();
        $certificado = certificado::all();
        return view('certificado.certificado', compact('certificado','escola'));
    }

    
   

    
    public function destroy($id)
    {
        $certificado = certificado::find($id);
        if (isset($certificado)) {

            $certificado->delete();
        }
        return redirect()->route('certificado.index');
    }
}
