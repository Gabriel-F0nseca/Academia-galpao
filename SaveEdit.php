<?php

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email']; // passar o parametro de cada variavel para inserir no nosso sql
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $data_nascimento = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $sqlUpdate = "UPDATE usuarios SET nome='$nome',senha='$senha',email='$email',telefone='$telefone',sexo='$sexo',data_nascimento='$data_nascimento',cidade='$cidade',estado='$estado',endereco='$endereco'
        WHERE id='$id'"; // condição para o id ser igual ao id.

        $result = $conexao->query($sqlUpdate);

    
    }
    header('Location: alunos.php');


    // Esssa logica consiste em = Vai verificar se existe esse update no meu post se existir ele atualiza o registro, caso contrario retorna a alunos.php
?> 