<?php
     session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']) )
    {
        //parametro qe obrigado ambos estarem preenchidos, não pode ser nulo.

        // se o login existir ele acessa o sistema, esse login tem que estar cadastrado
        
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        // print_r('Email: ' . $email);
        // print_r('<br>');
        // print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM  usuarios WHERE email = '$email' and senha = '$senha'"; // select para que ele verifique se tem um e-mail igual ao cadastrado na minha tela de login

        $result = $conexao->query($sql); 

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: TelaLogin.php');
        }
        else{

            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;

            header('Location: sistema.php');

        }

    }
    else
    {
        // caso não exista ele retorna para nossa tela de login

        header ('Location : TelaLogin.php');
    }



?>