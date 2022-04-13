<?php
//-------------------------------------------SQL-----------------------------------------------------------
    if(!empty($_GET['id'])) // verifica se tem ou n id como parametro, se não estiver vazio a minha variavel id, e como está na url pegamos com um GET
    {
        // print_r($_POST['nome']);
        // print_r($_POST['email']);
        // print_r($_POST['telefone']);

        include_once('config.php'); // ligando minha config php à meu formulario

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id"; //condição que meu id seja exatamente igual a variavel q está vindo do meu paramentro

        $result = $conexao->query($sqlSelect); //roda essa query em nosso banco, conexao que é a variavel do config.php

        if($result->num_rows > 0){ // se o id não for maior q 0 ele não existe então demos um header location.


            while($user_data = mysqli_fetch_assoc($result))// laço repetição while, e fetch_assoc retorna uma matrix associativa.
            {
                $nome = $user_data['nome'];
                $senha = $user_data['senha'];
                $email = $user_data['email']; // passar o parametro de cada variavel para inserir no nosso sql
                $telefone = $user_data['telefone'];
                $sexo = $user_data['sexo'];
                $data_nascimento = $user_data['data_nascimento'];
                $cidade = $user_data['cidade'];
                $estado = $user_data['estado'];
                $endereco = $user_data['endereco'];
            }


            
        }
        else{
            header('Location: alunos.php');
        }

        

        
    }
    else{
        header('Location: alunos.php'); // seu eu tirar o id da url ele retorna a pag
    }



//----------------------------------------------SQL-------------------------------------------------
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário || Galpão </title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(199, 2, 2), rgb(67, 10, 2));
        }

        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 15px;
            border-radius: 15px;
            width: 20%;



        }
        .DadosAlunos{
            position: relative;
            
        }
    

        fieldset{
            border: 3px solid red;
        }
        legend{
            border: 2px solid red;
            padding: 10px;
            text-align: center;
            background-color: red;
            border-radius: 10px;

        }
        .User{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: rgb(255, 255, 255);
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }

        .efeito{
            position:absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;

        }
        .User:focus ~ .efeito,
        .User:valid ~ .efeito{
            top: -20px;
            font-size: 12px;
            color: red;

        }
        /* JOGO DA VELHA CHAMA O ID DENTRO DO CSS*/

        #nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;

        }

        #update{
            background-image: linear-gradient(to right, rgb(199, 2, 2), rgb(67, 10, 2));
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;


        }

        #update:hover{
            background-image: linear-gradient(to right, rgb(103, 3, 3), rgb(0, 0, 0));
        }

        
    </style>
</head>
<body>
    <a href="alunos.php">Back</a>
    <div class="box">
        <form action="SaveEdit.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Alunos</b></legend>
                <br>
                <div class="DadosAlunos">
                    <input type="text" name="nome" id="nome" class="User" value="<?php echo $nome ?>"
                    required>
                    <label for="nome" class="efeito">Nome Completo</label>

                </div>
                <br><br>

                <div class="DadosAlunos">
                    <input type="text" name="senha" id="senha" class="User" value="<?php echo $senha ?>"
                    required>
                    <label for="senha" class="efeito">Senha</label>

                </div>
                <br><br>


                <div class="DadosAlunos">
                    <input type="text" name="email" id="email" class="User" value="<?php echo $email ?>"
                    required>
                    <label for="email" class="efeito">Email</label>

                </div>
                <br><br>

                <div class="DadosAlunos">
                    <input type="tel" name="telefone" id="telefone" class="User" value="<?php echo $telefone ?>"
                    required>
                    <label for="telefone" class="efeito">Telefone</label>

                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="sexo"
                value="feminino" <?php echo ($sexo == 'feminino') ? 'checked' : '' ?>>
                <label for="feminino" >Feminino</label>
                <br>

                <input type="radio" id="outro" name="sexo"
                value="outro" <?php echo ($sexo == 'outro') ? 'checked' : '' ?>>
                <label for="outro">Outro</label>
                <br>

                <input type="radio" id="masculino" name="sexo"
                value="masculino" <?php echo ($sexo == 'masculino') ? 'checked' : '' ?>>
                <label for="masculino">Masculino</label>
                <br><br>
                
                    <label for="nascimento"><b>Data de Nascimento:</b> </label>
                    <input type="date" name="data_nascimento" id="data_nascimento" value="<?php echo $data_nascimento ?>"
                    required>
                    

                
                <br><br>
                <div class="DadosAlunos">
                    <input type="text" name="cidade" id="cidade" class="User" value="<?php echo $cidade ?>"
                    required>
                    <label for="cidade" class="efeito">Cidade</label>

                </div>
                <br><br>
                <div class="DadosAlunos">
                    <input type="text" name="estado" id="estado" class="User" value="<?php echo $estado ?>"
                    required>
                    <label for="estado" class="efeito">Estado</label>

                </div>
                <br><br>
                <div class="DadosAlunos">
                    <input type="text" name="endereco" id="endereco" class="User" value="<?php echo $endereco ?>"
                    required>
                    <label for="endereco" class="efeito">Endereço</label>

                </div>
                <br><br>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <input type="submit" name="update" id="update">
                
            </fieldset>


        </form>

    </div>
    
</body>
</html>