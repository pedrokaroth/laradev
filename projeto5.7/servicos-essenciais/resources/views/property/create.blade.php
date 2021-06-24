<form action="{{ route('imoveis.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <label for="">Titulo do Imovel</label>
    <input type="text" name="title">
    <br>
    <label for="">Preço de Locação</label>
    <input type="text" name="rental_price">
    <br>
    <label for="">Imagem de Destaque</label>
    <input type="file" name="cover">
    <br>
    <button type="submit">Salvar</button>

</form>
