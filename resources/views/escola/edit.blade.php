@extends('layouts.app')
@section('content')

    <div class="container">
        <form id="frmescola" name="frmescola" action="{{ route('escola.update', $escola->id) }}" method="POST">
            @csrf
            @method('PUT')
            <h3>Editar</h3>
            <div class="form-group">
                <label for="nome_escola">Nome escola:</label>
                <input type="nome_escola" class="form-control" id="nome_escola" name="nome_escola"
                    value="{{ $escola->nome_escola }}">
            </div>

            <div class="form-group">
                <label for="responsavel">Responsavel:</label>
                <input type="responsavel" class="form-control" id="responsavel" name="responsavel"
                    value="{{ $escola->responsavel }}">
            </div>

            <div class="form-group">
                <label for="funcao_resp">funcao do responsavel:</label>
                <input type="funcao_resp" class="form-control" id="funcao_resp" name="funcao_resp"
                    value="{{ $escola->funcao_resp }}">
            </div>
            
        

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
