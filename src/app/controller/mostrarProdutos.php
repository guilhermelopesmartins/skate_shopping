<?php
require_once "../models/produto.model.php";
echo json_encode(Produto::mostraProdutos());
?>