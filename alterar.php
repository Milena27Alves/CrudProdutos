
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulario</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php


require "autoload.php";

use Ifnc\Tads\Gateway\ProdutoGateway;

$conn = new \PDO("sqlite:" . __DIR__ . "/database/tads.db");
ProdutoGateway::setConnection($conn);
$gw = new ProdutoGateway();
$var = $gw->find($_GET['id']);

$var2 = $var[0];
    ?>
<form action="att.php" method="post">
    <div class="col-sm-3">
            <div class="form-group">
                <label>Descricao</label>
                <input type="hidden" name ="id" value="<?=$_GET['id']?>">
                <input type="imput" class="form-control" name="descricao" value="<?=$var2->descricao?>">
                <label>Estoque</label>
                <input type="imput" class="form-control" name="estoque" value="<?=$var2->estoque?>">
                <label>Preco de Custo</label>
                <input type="imput" class="form-control" name="preco_custo" value="<?=$var2->preco_custo?>">
                <label>Preco de Vendas</label>
                <input type="imput" class="form-control" name="preco_venda" value="<?=$var2->preco_venda?>">
                <label>Codigo de Barras</label>
                <input type="imput" class="form-control" name="codigo_barras" value="<?=$var2->codigo_barras?>">
                <label>Origem</label>
                <input type="imput" class="form-control" name="origem" value="<?=$var2->origem?>">
            </div>

        <input class="btn btn-primary" type="submit" value="atualizar" id="tbn">
    </div>

</form>

</html>