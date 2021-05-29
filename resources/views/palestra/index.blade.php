@extends('layouts.app')
@section('content')


    <div class="container">

        <h2>Palestras</h2>
        <hr />

        <a href="{{ url('palestra/create') }}" class="btn btn-success">Nova palestra</a>

        <a href="{{ url('escola') }}" class="btn btn-secondary">Escolas</a>

        
       
        <br><br>
        <table class="table">
            <thead class="thead-dark">
                <tr>

                    <th scope="col">foto</th>
                    <th scope="col">Tema</th>
                    <th scope="col">Palestrante</th>
                    <th scope="col">Periodo</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Horas</th>
                    <th scope="col">Opções</th>

                </tr>
            </thead>

            
            <tbody>
                <tr>
                    @foreach ($palestra as $palestras)
                    

                         
                            <tbody>
                                <tr>
                                    <td><img src="/img/fotos/{{ $palestras->image }}" alt=""
                                        style="width:120px; height:100px; border: 1px solid black; "></td>
                                    
                                    <td>{{ $palestras->tema }}</td>
                                    <td>{{ $palestras->palestrante }}</td>
                                    <td>{{ $palestras->periodo }}</td>
                                    <td>{{ $palestras->cidade }}</td>
                                    <td>{{ $palestras->horas }}</td>

            
                                    <td>
                                        <a href="{{ route('palestra.edit', $palestras->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                        <a href="{{ url('palestra/delete', ['id' => $palestras->id]) }}"
                                            class="btn btn-danger btn-sm">Remover</a>
                                    </td>
                                </tr>
                            </tbody>
                        @endforeach
            


                    </td>
                </tr>

            </tbody>
           
        </table>
   

    @endsection
