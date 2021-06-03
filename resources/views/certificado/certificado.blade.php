<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <img src="/img/certificado_branco.jpg" alt="fundo certificado">
    <title>certificado</title>
    <style>
       
        .dados {
            position: absolute;
            top: 140px;
            left: 300px;
            display: flex
        }
        .img {
            
            margin: 40px;
            position: absolute;
            top: 120px;
        }
        

        .txts {
            font-size: 1.3rem;
        }
        

    </style>
</head>

<body>
    <div class="dados">
        <div class="img">
            @foreach ($certificado as $certificados)@endforeach


            <img src="/img/ass.png" alt="assinatura"
                style="width:150px; height:150px; " id="assinatura">
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
            <br>
            <br>
            <br>
            <p>Bebedouro, 99 de mes de 9999 <br>
                Registro n.{{ $certificados->id }}<br> <br>
                Prof.{{$certificados->palestrante}}<br>
                Diretor da escola técnica.</p>
        </div>

    </div>

</body>

</html>
