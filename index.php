<?php
require "autoload.php";
use Ifnc\Tads\Gateway\ProdutoGateway;
$conn = new \PDO("sqlite:".__DIR__."/database/tads.db");
ProdutoGateway::setConnection($conn);
$gw = new ProdutoGateway();
$produtos = $gw->all();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Mercadorias</title>
</head>
<body>
        <div class="col-md-6">
            <h1><a href="criar.html"><input class="btn btn-outline-warning" type="submit" value=" Create "></a></h1>
        </div>
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Descrição</th>
        <th scope="col">Estoque</th>
        <th scope="col">preco_custo</th>
        <th scope="col">preco_venda</th>
        <th scope="col">codigo_barras</th>
        <th scope="col">data_cadastro</th>
        <th scope="col">origem</th>
        <th scope="col">Apagar</th>
        <th scope="col">Alterar</th>


    </tr>
    </thead>
    <tbody>
    <?php
    foreach($produtos as $produto){
        ?>
        <tr>
            <th scope="row"><?=$produto->id?></th>
            <td><?=$produto->descricao?></td>
            <td><?=$produto->estoque?></td>
            <td><?=$produto->preco_custo?></td>
            <td><?=$produto->preco_venda?></td>
            <td><?=$produto->codigo_barras?></td>
            <td><?=$produto->data_cadastro?></td>
            <td><?=$produto->origem?></td>
            <td><button class="btn btn-outline-warning"><a href="apagar.php?id=<?=$produto->id?>">Delete</a></button></td>
            <td><button class="btn btn-outline-warning"><a href="alterar.php?id=<?=$produto->id?>">Update</a></button></td>
        </tr>
    <?php } ?>
    </tbody>
</table>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>