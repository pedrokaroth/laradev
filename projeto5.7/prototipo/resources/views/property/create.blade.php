@extends('property.master')
@section('content')
    <div class="container my-3">
        <h1>Criar um novo Imóvel </h1>

        <form action="<?= url("/imoveis/store") ?>" method="post">
            <?= csrf_field() ?>

            <div class="form-group">
                <label for="title"> Titulo do imóvel</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="form-group">
                <label for="description"> Descrição do imóvel</label>
                <textarea name="description" name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </div>

            <div class="from-group">
                <label for="rental_price"> Valor do Aluguel</label>
                <input type="text" name="rental_price" id="rental_price" class="form-control"><br>
            </div>

            <div class="form-group">
                <label for="sale_price"> Valor do imóvel</label>
                <input type="text" name="sale_price" id="sale_price" class="form-control"><br>
            </div>
            <button class="btn btn-primary" type="submit">Cadastrar Imóvel</button>

        </form>
    </div>
@endsection
