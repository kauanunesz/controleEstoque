<?php 

    include 'conexao.php';

    $select = "SELECT * FROM tb_usuario;";

    $query = $conexao->query($select);


    if(empty($insert) == false)
        {
            echo $query;
        }

?>