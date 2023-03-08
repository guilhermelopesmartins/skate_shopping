<?php
require_once "../models/compras.model.php";
echo json_encode(Compras::mostrarCompras($_POST['id']));
?>