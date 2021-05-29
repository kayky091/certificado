@extends('layouts.app')
@section('content')


<div class="container">
    
    <h2>Escolas</h2>
    <hr />
   
    <a href="{{ url('escola/create') }}" class="btn btn-success">Adicionar escola</a>

    <a href="{{ url('palestra') }}" class="btn btn-secondary">Palestras</a>
    <br><br>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                
                
                <th scope="col">id</th>
                <th scope="col">Nome escola</th>
                <th scope="col">Responsavel</th>
                <th scope="col">função do responsavel</th>
                
                <th scope="col">Opções</th>
                
            </tr>
        </thead>

        @foreach ($escola as $escolas)
            <tbody>
                <tr>
                   
                    <td>{{ $escolas->id }}</td>
                    <td>{{ $escolas->nome_escola }}</td>
                    <td>{{ $escolas->responsavel }}</td>
                    <td>{{ $escolas->funcao_resp }}</td>
                    
                    <td>
                        <a href="{{ route('escola.edit', $escolas->id) }}" class="btn btn-primary btn-sm">Editar</a>
                        <a href="{{ url('escola/delete', ['id' => $escolas->id]) }}"
                            class="btn btn-danger btn-sm">Remover</a>
                        
                               
                    </td>
                </tr>
            </tbody>
        @endforeach
    </table>

    
</div>


@endsection
