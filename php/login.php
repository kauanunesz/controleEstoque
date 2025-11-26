<?php 
    $login_form = $_POST['login'];
    $senha_form = $_POST['senha'];
    include 'conexao.php';
    $select = "SELECT * FROM tb_usuario WHERE login = '$login_form'";
    $query = $conexao->query($select);

    // Pegar o 1º registro

    $resultado = $query->fetch_assoc();

    $user_banco = $resultado['login'];
    $senha_banco = $resultado['senha'];

    if ($login_form === $user_banco && $senha_form === $senha_banco)
    {
        echo "<script>alert('Usuário cadastrado com sucesso')</script>";
        header('location: ../pages/home.html');
    }
    else
    {
        echo "<script>alert('Usuario ou senha inválidos.'); history.back()</script>";
    }
?>