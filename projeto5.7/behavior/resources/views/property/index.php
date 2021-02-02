<h1> Listagem de Produtos </h1>
<a href="<?= url('/imoveis/criar') ?>">Cadastrar novo Imóvel</a>

<?php if(!empty($properties)) {
    echo "<table>";

    echo
    "<tr>
        <td>Titulo</td>
        <td>Descrição</td>
        <td>Valor de Locação</td>
        <td>Valor de Compra</td>
        <td>Ações</td>
    </tr>";

    foreach ($properties as $property) {

        $links = (object)[
            'view' => url('imoveis/' . $property->id),
            'edit' => url('imoveis/editar/' . $property->id),
            'delete' => url('imoveis/deletar/' . $property->id)
        ];

        echo
        "<tr>
            <td>{$property->title}</td>
            <td>{$property->description}</td>
            <td> R$". number_format($property->rental_price, 2, ',',  '.') ."</td>
            <td> R$". number_format($property->sale_price, 2, ',',  '.') ."</td>
            <td>
                <a href='" . $links->view . "'>Ver</a> |
                <a href='" . $links->edit . "'>Editar</a> |
                <a href='" . $links->delete . "'>Remover</a>


            </td>
        </tr>";
    }

    echo "</table>";

}
