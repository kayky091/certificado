<?php

namespace App\Http\Controllers;


use App\Models\Escola;

use App\http\Requests\EscolaRequest;

class EscolaController extends Controller
{
    public function index()
    {
        $escola = Escola::all();
        return view('escola.index', compact('escola'));
    }


    public function create()
    {
        $escola = Escola::all();
        return view('escola.create', compact('escola'));
    }


    public function store(EscolaRequest $request)
    {
        $escola = new Escola();
        $escola->nome_escola = $request->input('nome_escola');
        $escola->responsavel = $request->input('responsavel');
        $escola->funcao_resp = $request->input('funcao_resp');
        $escola->save();
        return redirect()->route('escola.index', compact('escola'));
    }




    public function edit($id)
    {
        $escola = Escola::find($id);
        if (isset($escola)) {
            return view('escola.edit', compact('escola'));
        }
        return view('escola.index');
    }


    public function update(EscolaRequest $request, $id)
    {
        $escola = Escola::find($id);
        if (isset($escola)) {

            $escola->nome_escola = $request->input('nome_escola');
            $escola->responsavel = $request->input('responsavel');
            $escola->funcao_resp = $request->input('funcao_resp');
            $escola->save();
        }
        return redirect()->route('escola.index', compact('escola'));
    }


    public function destroy($id)
    {
        $escola = Escola::find($id);
        if (isset($escola)) {

            $escola->delete();
        }
        return redirect()->route('escola.index');
    }
}
