<?php
    session_start();
    include_once('config.php');
    

    $sql = "SELECT * FROM usuarios ORDER BY id DESC";

    $result = $conexao->query($sql);

    $logado = $_SESSION['email'];

    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Alunos || Galpão</title>

    <style>
        body{
            color: white;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(199, 2, 2), rgb(67, 10, 2));
        }

        .table-bg{
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 15px 15px 0 0;

        }    
    </style>
</head>
<body class="m-5">
    <br>
<?php
        echo "<h1> Bem vindo: <u>$logado</u></h1>";
    ?>
    <br>
    <div>
        <table class="table text-white table-bg">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Sexo</th>
                    <th scope="col">Data de Nascimento</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Endereço</th>
                    <th scope="col">...</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    while($user_data = mysqli_fetch_assoc($result))
                    {
                        echo "<tr>";
                        echo "<td>" .$user_data['id']."</td>";
                        echo "<td>" .$user_data['nome']."</td>";
                        echo "<td>" .$user_data['senha']."</td>";
                        echo "<td>" .$user_data['email']."</td>";
                        echo "<td>" .$user_data['telefone']."</td>";
                        echo "<td>" .$user_data['sexo']."</td>";
                        echo "<td>" .$user_data['data_nascimento']."</td>";
                        echo "<td>" .$user_data['cidade']."</td>";
                        echo "<td>" .$user_data['estado']."</td>";
                        echo "<td>" .$user_data['endereco']."</td>";
                        echo "<td>
                            <a class='btn btn-sm btn-primary' href='Editar.php?id=$user_data[id]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                            </a>

                            <a class='btn btn-sm btn-danger' href='Delet.php?id=$user_data[id]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                        <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                        </svg>

                            </a>

                            
                        </td>";
                    echo "</tr>";


                    } // laço de repetição , informamos que um bloco de cod deve ser repetido enquanto a condição declarada for verdadeira.
                    
                ?>
            </tbody>
        </table>
    </div>
    
    

</body>
</html>