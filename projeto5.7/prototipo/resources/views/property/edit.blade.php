@extends('property.master')
@section('content')
    <div class="container">
        <?php
        $property = $property[0];
        ?>

        <h1>Editar Imóvel </h1>

        <form action="<?= url("/imoveis/update", ['id' => $property->id]) ?>" method="post">
            <?= csrf_field() ?>
            <?= method_field('PUT') ?>

            <div class="form-group">
                <label for="title"> Titulo do imóvel</label>
                <input type="text" name="title" id="title" value="<?= $property->title ?>" class="form-control">
            </div>
            <div class="form-group">
                <label for="description"> Descrição do imóvel</label>
                <textarea name="description" name="description" id="description" cols="30" rows="10" class="form-control"><?= $property->description ?></textarea>
            </div>
            <div class="form-group">
                <label for="rental_price"> Valor do Aluguel</label>
                <input type="text" name="rental_price" id="rental_price" value="<?= $property->rental_price ?>" class="form-control">
            </div>
            <div class="from-group">
                <label for="sale_price"> Valor do imóvel</label>
                <input type="text" name="sale_price" id="sale_price" value="<?= $property->sale_price ?>" class="form-control">
            </div>
            <button class="btn btn-primary my-3" type="submit">Salvar</button>

        </form>
    </div>
@endsection
