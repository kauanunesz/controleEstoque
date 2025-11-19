<?php 
    // incluir o arquiv de conexão

    include 'conexao.php';

    $nm_usuario = $_POST['nome'];
    $dt_nascimento = $_POST['data'];
    $login = $_POST['login'];
    $senha_usuario = $_POST['senha'];
    $setor = $_POST['setor'];

    
    //função para inserir os dados do usario
    
    $insert = "INSERT INTO tb_usuario values (null, '$nm_usuario', '$dt_nascimento', '$login', '$senha_usuario', '$setor')";
    
    $query = $conexao->query($insert);
    
    if ($query)
    {
        echo "<script> 
        alert ('Usuário cadastrado com sucesso!');
        location.href='../index.php';
        </script>";
    }
    else
    {
        echo "<script> 
        alert ('Erro ao cadastrar');
        </script>";
    }
?>