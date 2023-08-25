<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Contatos existentes
    </h1>
    <php
    @foreach($tblanche as $c)
    {{$c->idcontato }}
    <h1>{{$c->nome }}</h1>
    <h2>{{$c->email }}</h2>
    <h3>{{$c->assunto }}</h3>
    <h4>{{$c->mensagem }}</h4>
    @endforeach
?>
</body>
</html>