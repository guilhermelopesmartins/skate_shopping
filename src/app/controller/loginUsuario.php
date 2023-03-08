<?php
    require_once "../models/usuario.model.php";
    $arrayName = array(
        'login' => $_POST['login'],
        'senha' => $_POST['senha'],);

    echo json_encode(Usuario::fazerLogin($arrayName));
?>