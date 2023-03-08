<?php
    require_once "../models/usuario.model.php";
    $arrayName = array('nome' => $_POST['nome'],
        'data_nascimento' => $_POST['data_nascimento'],
        'login' => $_POST['login'],
        'senha' => $_POST['senha'],
        'email' => $_POST['email'],);

    echo json_encode(Usuario::inserirUsuario($arrayName));
?>