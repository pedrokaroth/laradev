@extends('property.master')
@section('content')

    <?php
    $property = $property[0];
    ?>

    <h1>Editar Imóvel </h1>

    <form action="<?= url("/imoveis/update", ['id' => $property->id]) ?>" method="post">
        <?= csrf_field() ?>
        <?= method_field('PUT') ?>

        <label for="title"> Titulo do imóvel</label>
        <input type="text" name="title" id="title" value="<?= $property->title ?>"><br>

        <label for="description"> Descrição do imóvel</label>
        <textarea name="description" name="description" id="description" cols="30" rows="10"><?= $property->description ?></textarea><br>

        <label for="rental_price"> Valor do Aluguel</label>
        <input type="text" name="rental_price" id="rental_price" value="<?= $property->rental_price ?>"><br>

        <label for="sale_price"> Valor do imóvel</label>
        <input type="text" name="sale_price" id="sale_price" value="<?= $property->sale_price ?>"><br>

        <button type="submit">Salvar</button>

    </form>

@endsection
