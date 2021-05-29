@extends('layouts.app')
@section('content')


    <div class="container">

        <h2>certificados</h2>
        <hr />

        <a href="{{ url('certificado/create') }}" class="btn btn-success">Novo certificado +</a>
        
        <a href="{{ url('escola') }}" class="btn btn-secondary">Escolas</a>

        
       
        <br><br>
        <table class="table">
            <thead class="thead-dark">
                <tr>

                    <th scope="col">nome</th>
                    <th scope="col">Palestrante</th>
                    <th scope="col">Tema</th>
                    <th scope="col">data</th>
                    <th scope="col">horario</th>
                    <th scope="col">diretor</th>
                    <th scope="col">escola</th>
                    <th scope="col">Opções</th>

                </tr>
            </thead>

            @foreach ($certificado as $certificados)
                    

                         
            <tbody>
                <tr>
                    
                    
                    <td>{{ $certificados->nome }}</td>
                    <td>{{ $certificados->palestrante }}</td>
                    <td>{{ $certificados->tema }}</td>
                    <td>{{ $certificados->data }}</td>
                    <td>{{ $certificados->horario }}</td>
                    <td>{{ $certificados->diretor }}</td>
                    @foreach ($escola as $escolas) @endforeach
                    <td>{{ $escolas->nome_escola }}</td>
                    


                    <td>
                        
                        <a href="{{ url('certificado/delete', ['id' => $certificados->id]) }}"
                            class="btn btn-danger btn-sm">Remover</a>

                        <a href="{{ url('certificado/show/{id}') }}" class="btn btn-info btn-sm">visualizar</a>
                    </td>
                </tr>
            </tbody>
        @endforeach


            
        </table>
   

    @endsection
