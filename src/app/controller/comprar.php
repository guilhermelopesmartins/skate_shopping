<?php
require_once "../models/compras.model.php";
$arrayName = array(
    'id_produto' => $_POST['id_produto'],
    'id_usuario' => $_POST['id_usuario'],
    'dt_compra' => $_POST['dt_compra']
);
echo json_encode(Compras::comprar($arrayName));
?>