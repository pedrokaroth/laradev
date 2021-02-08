<!doctype html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LaraDev: CRUD Imob</title>
</head>
<body>
    <p>
        <a href="<?= url('/imoveis') ?>">Listar todos os Imóveis</a> |
        <a href="<?= url('/imoveis/criar') ?>">Cadastrar novo Imóvel</a>
    </p>
    @yield('content')

</body>
</html>
