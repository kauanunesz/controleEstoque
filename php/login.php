<?php 
    $login_form = $_POST['login'];
    $senha_form = $_POST['senha'];
    include 'conexao.php';
    $select = "SELECT * FROM tb_usuario WHERE login = $login_form;";
    $query = $conexao->query($select);

    // Pegar o 1º registro

    $resultado = $query->fetch_assoc();

    $user_banco = $resultado['usuario'];
    $senha_banco = $resultado['senha'];

    // ifs e elses
    // Direcionar o forms via post
?>