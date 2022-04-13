<?php
    
    if(!empty($_GET['id'])){

        include_once('config.php'); // ligando minha config php à meu formulario

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id"; //condição que meu id seja exatamente igual a variavel q está vindo do meu paramentro

        $result = $conexao->query($sqlSelect); //roda essa query em nosso banco, conexao que é a variavel do config.php

        if($result->num_rows > 0){ // se o resultado o n de linhas for maior q 0, quer dizer q ele existe na tabela e está pronto para ser deletado

            $sqlDelete = "DELETE FROM usuarios WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);
            
        }

    }
    header('Location: alunos.php')






?>