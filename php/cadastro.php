<?php
include 'conexao.php';

    $nome            = $_POST['nome'];
    $dtNasc        = $_POST['data'];
    $login           = $_POST['login'];
    $senha           = $_POST['senha'];
    $setor           = $_POST['setor'];

    $insert = "INSERT INTO tb_usuario VALUES (null, '$nome', '$data', '$login', '$senha', '$setor')";
    $query = $conexao->query($insert);

?>

<script>
    location.href='../index.php;';
</script>