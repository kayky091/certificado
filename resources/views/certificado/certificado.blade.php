<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <img src="/img/certificado_branco.jpg" alt="fundo certificado">
    <title>certificado</title>
    <style>
        img {
            width: 100%;
            height: auto;
        }

        .dados {
            position: absolute;
            top: 200px;
            left: 200px;
            display: flex
        }
        .img {
            margin: 40px;
        }

        .txts {
            font-size: 1.5rem;
        }

    </style>
</head>

<body>
    <div class="dados">
        <div class="img">
            @foreach ($certificado as $certificados)@endforeach


            <img src="/img/fotos_certificado/{{ $certificados->image }}" alt=""
                style="width:200px; height:200px; border: 1px solid black; ">
        </div>
        <div class="txts">
            @foreach ($escola as $escolas)@endforeach
            <p>A Escola Técnica Estadual "{{ $escolas->nome_escola }}" <br>
                confere ao(a) Sr(a). "{{ $certificados->nome }}", o <br>
                presente certificado considerando importante trabalho <br> voluntario ministrando a palestra <br>
                com o tema "{{ $certificados->tema }}", <br>
                realizada no dia "{{ $certificados->data }}" com "{{ $certificados->horas }}" de duracao</p>
            <br>
            <br>
            
            <p>Bebedouro, 99 de mes de 9999 <br>
                Registro n.{{ $certificados->id }}<br> <br>
                Prof. Senhor diretor da silva<br>
                Diretor da escola técnica.</p>
        </div>

    </div>

</body>

</html>
