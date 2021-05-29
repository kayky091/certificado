@extends('layouts.app')
@section('content')

    <div class="container">
        <form id="frmpalestra" name="frmpalestra" action="{{ route('palestra.update', $palestra->id) }}" method="POST">
            @csrf
            @method('PUT')
            <h3>Editar</h3>
            <div class="form-group">
                <label for="tema">Tema:</label>
                <input type="text" value="{{$palestra->tema}}" class="form-control {{ $errors->has('tema') ? 'is-invalid' : '' }}" id="tema"
                    name="tema" placeholder="Informe o tema:">
                @if ($errors->has('tema'))
                    <div class="invalid-feedback">
                        {{ $errors->first('tema', 'O campo é obrigatorio !') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="palestrante">Palestrante:</label>
                <input type="text" value="{{$palestra->palestrante}}" class="form-control {{ $errors->has('palestrante') ? 'is-invalid' : '' }}"
                    id="palestrante" name="palestrante" placeholder="Informe o palestrante:">
                @if ($errors->has('palestrante'))
                    <div class="invalid-feedback">
                        {{ $errors->first('palestrante', 'O campo é obrigatorio !') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label for="cidade">Cidade:</label>
                <input type="text" value="{{$palestra->cidade}}" class="form-control {{ $errors->has('cidade') ? 'is-invalid' : '' }}" id="cidade"
                    name="cidade" placeholder="Informe a cidade:">
                <div class="invalid-feedback">
                    {{ $errors->first('cidade', 'O campo é obrigatorio !') }}
                </div>
            </div>

            <div class="form-group">
                <label for="date">Data:</label>
                <input type="date" value="{{$palestra->data}}" name="date" id="date">
            </div>



            <div class="form-group">
                
                <select class="form-select  {{ $errors->has('periodo') ? 'is-invalid' : '' }} "
                    aria-label="Default select example" name="periodo">
                    <option selected>{{$palestra->periodo}}</option>
                    <option value="manha">Manha</option>
                    <option value="tarde">Tarde</option>
                    <option value="noite">Noite</option>
                </select>

                <div class="invalid-feedback">
                    {{ $errors->first('periodo', 'O campo é obrigatorio !') }}
                </div>
            </div>
            <div class="form-group">
                <label for="horas">horas:</label>
                <input type="text" value="{{$palestra->horas}}" class="form-control {{ $errors->has('horas') ? 'is-invalid' : '' }}" id="horas"
                    name="horas" placeholder="Informe o horas:">
                <div class="invalid-feedback">
                    {{ $errors->first('horas', 'O campo é obrigatorio !') }}
                </div>
            </div>

            <div class="form-group col-6">
                <label for="forn_id">Selecione a escola:</label>
                <select class="form-control" name="escola_id" id="escola_id">
                    <option value="">selecione:</option>
                    @foreach ($escola as $escolas)
                        <option value="{{ $escolas->id}}"> {{ $escolas->nome_escola }}</option>
                    @endforeach

                </select>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

@endsection
