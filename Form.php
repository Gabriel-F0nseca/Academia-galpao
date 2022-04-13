<?php
//-------------------------------------------SQL-----------------------------------------------------------
    if(isset($_POST['submit']))
    {
        // print_r($_POST['nome']);
        // print_r($_POST['email']);
        // print_r($_POST['telefone']);

        include_once('config.php'); // ligando minha config php à meu formulario

        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $email = $_POST['email']; // passar o parametro de cada variavel para inserir no nosso sql
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nascimento = $_POST['nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO  usuarios(nome,email,telefone,senha,sexo,data_nascimento,cidade,estado,endereco) VALUES
        ('$nome','$email','$telefone','$senha','$sexo','$data_nascimento','$cidade','$estado','$endereco')");

        header('Location TelaLogin.pgp');
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

        #submit{
            background-image: linear-gradient(to right, rgb(199, 2, 2), rgb(67, 10, 2));
            width: 100%;
            padding: 15px;
            border: none;
            border-radius: 10px;
            color: white;
            font-size: 15px;
            cursor: pointer;


        }

        #enviar:hover{
            background-image: linear-gradient(to right, rgb(103, 3, 3), rgb(0, 0, 0));
        }

        
    </style>
</head>
<body>
    <a href="sistema.php">Back</a>
    <div class="box">
        <form action="Form.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Alunos</b></legend>
                <br>
                <div class="DadosAlunos">
                    <input type="text" name="nome" id="nome" class="User"
                    required>
                    <label for="nome" class="efeito">Nome Completo</label>

                </div>
                <br><br>

                <div class="DadosAlunos">
                    <input type="password" name="senha" id="senha" class="User"
                    required>
                    <label for="senha" class="efeito">Senha</label>

                </div>
                <br><br>


                <div class="DadosAlunos">
                    <input type="text" name="email" id="email" class="User"
                    required>
                    <label for="email" class="efeito">Email</label>

                </div>
                <br><br>

                <div class="DadosAlunos">
                    <input type="tel" name="telefone" id="telefone" class="User"
                    required>
                    <label for="telefone" class="efeito">Telefone</label>

                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero"
                value="feminino">
                <label for="feminino" >Feminino</label>
                <br>

                <input type="radio" id="outro" name="genero"
                value="outro">
                <label for="outro">Outro</label>
                <br>

                <input type="radio" id="masculino" name="genero"
                value="masculino">
                <label for="masculino">Masculino</label>
                <br><br>
                
                    <label for="nascimento"><b>Data de Nascimento:</b> </label>
                    <input type="date" name="nascimento" id="nascimento" 
                    required>
                    

                
                <br><br>
                <div class="DadosAlunos">
                    <input type="text" name="cidade" id="cidade" class="User"
                    required>
                    <label for="cidade" class="efeito">Cidade</label>

                </div>
                <br><br>
                <div class="DadosAlunos">
                    <input type="text" name="estado" id="estado" class="User"
                    required>
                    <label for="estado" class="efeito">Estado</label>

                </div>
                <br><br>
                <div class="DadosAlunos">
                    <input type="text" name="endereco" id="endereco" class="User"
                    required>
                    <label for="endereco" class="efeito">Endereço</label>

                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
                
            </fieldset>


        </form>

    </div>
    
</body>
</html>