@extends('layouts.app')
@section('content')

    <div class="container">
        <form action="{{ url('certificado') }}" enctype="multipart/form-data" method="POST">
            @csrf



            <div class="form-group">
                <label for="nome">nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Informe o seu nome:">
            </div>
            <div class="form-group">
                <select class="form-select " aria-label="Default select example" name="palestrante">
                    <option selected>Selecione o palestrante:</option>
                    @foreach ($palestra as $palestrante)
                        <option value="{{ $palestrante->palestrante }}"> {{ $palestrante->palestrante }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">

                <select class="form-select " aria-label="Default select example" name="tema">
                    <option selected>Selecione o tema:</option>
                    @foreach ($palestra as $tema)
                        <option value="{{ $tema->tema }}"> {{ $tema->tema }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">

                <select class="form-select " aria-label="Default select example" name="data">
                    <option selected>Selecione a data:</option>
                    @foreach ($palestra as $data)
                        <option value="{{ $data->data }}"> {{ $data->data }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">

                <select class="form-select " aria-label="Default select example" name="horario">
                    <option selected>Selecione o horario:</option>
                    @foreach ($palestra as $horas)
                        <option value="{{ $horas->horas }}"> {{ $horas->horas }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">

                <select class="form-select " aria-label="Default select example" name="diretor">
                    <option selected>Selecione o responsavel:</option>
                    @foreach ($escola as $escolas)
                        <option value="{{ $escolas->responsavel }}"> {{ $escolas->responsavel }}</option>
                    @endforeach
                </select>


            </div>
            <div class="form-group">

                <select class="form-select " aria-label="Default select example" name="escola">
                    <option selected>Selecione a escola :</option>
                    @foreach ($escola as $escolas)
                        <option value="{{ $escolas->nome_escola }}"> {{ $escolas->nome_escola }}</option>
                    @endforeach
                </select>


            </div>


            <div class="form-group">
                <label for="image">Foto</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div>

            <button type="submit" class="btn btn-primary">gerar</button>
        </form>
    </div>

@endsection
