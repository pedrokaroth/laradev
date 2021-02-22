<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Formulários :: Teste de Rotas</title>
</head>
<body>

<div class="container my-5">
    <form action="{{ url('/users/1') }}" method="POST" autocomplete="off">
        <?= csrf_field(); ?>
        @method('DELETE')

        <div class="form-group">
        <div class="form-group">
            <label for="">Primeiro Nome</label>
            <input type="text" name="first_name" class="form-control" value="Pedro Afonso">
        </div>

        <div class="form-group">
            <label for="">Sobrenome</label>
            <input type="text" name="last_name" class="form-control" value="Roth Dimbarre">
        </div>

        <div class="form-group">
            <label for="">Email: </label>
            <input type="email" name="email" class="form-control" value="pedrokaroth@gmail.com">
        </div>

        <button class="btn btn-primary">Salvar</button>
    </form>
</div>

<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
