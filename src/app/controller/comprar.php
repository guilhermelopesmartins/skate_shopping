<?php
require_once "../models/produto.model.php";
$arrayName = array(
    'id_produto' => $_POST['id_produto'],
    'id_usuario' => $_POST['id_usuario'],
    'dt_compra' => $_POST['dt_compra']
);
echo json_encode(Produto::comprar($arrayName));
?>