<?php
require "autoload.php";

use Ifnc\Tads\Gateway\ProdutoGateway;


    $conn = new \PDO("sqlite:".__DIR__."/database/tads.db");

    ProdutoGateway::setConnection($conn);
    $gw = new ProdutoGateway();
    $data = new sq
    $data->id = 4;
    $data->descricao = 'Refrigerante';
    $data->estoque = 100;
    $data->preco_custo = 12;
    $data->preco_venda = 18;
    $data->codigo_barras = '13523453234234';
    $data->data_cadastro = date('Y-m-d');
    $data->origem = 'N';

    var_dump($gw->update($data));


?>