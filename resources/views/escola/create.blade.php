@extends('layouts.app')
@section('content')

    <div class="container">
        <form id="frmescola" name="frmescola" action="{{ url('escola') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nome_escola">Nome escola:</label>
                <input type="text" class="form-control  {{ $errors->has('nome_escola') ? 'is-invalid' : '' }}" id="nome_escola" name="nome_escola"
                    placeholder="Informe o nome da escola:">

                @if ($errors->has('nome_escola'))
                    <div class="invalid-feedback">
                        {{ $errors->first('nome_escola', 'O campo é obrigatorio !') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="responsavel">responsavel:</label>
                <input type="text" class="form-control  {{ $errors->has('responsavel') ? 'is-invalid' : '' }}" id="responsavel" name="responsavel"
                    placeholder="Informe o responsavel">
                @if ($errors->has('responsavel'))
                    <div class="invalid-feedback">
                        {{ $errors->first('responsavel', 'O campo é obrigatorio !') }}
                    </div>
                @endif

                <div class="form-group">
                    <label for="funcao_resp">funcao_resp:</label>
                    <input type="text" class="form-control  {{ $errors->has('funcao_resp') ? 'is-invalid' : '' }}" id="funcao_resp" name="funcao_resp"
                        placeholder="Informe a funcao_resp">
                    @if ($errors->has('funcao_resp'))
                        <div class="invalid-feedback">
                            {{ $errors->first('funcao_resp', 'O campo é obrigatorio !') }}
                        </div>
                    @endif
                </div>




                <button type="submit" class="btn btn-primary">Salvar</button>
        </form>
    </div>

@endsection
