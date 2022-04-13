<?php
session_start();
// print_r($_SESSION);

if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true)){
    unset($_SESSION['email']);
    unset($_SESSION['senha']); // destruir qualquer dado com email e senha, para não ficar logado na sessão eternamente, (usamos isso para segurança)
    header('Location: TelaLogin.php');
}
$logado = $_SESSION['email'];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>
        Academia | Galpão
    </title>
    <style>
        body{
            
            background-image: linear-gradient(45deg, black, red);
            color: white;
            text-align: center;
            
        }

        *{
            margin: 0;
            padding: 0;

        }

        a{
            color: white;
            text-decoration: none;
            transition: 0.3s;

        }

        a:hover {
            opacity: 0.7;
        }

        .logo {

            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: 4px;
        }

        nav{
            display: flex;
            justify-content: space-around;
            align-items: center;
            font-family: system-ui, -apple-system, Arial, Helvetica, sans-serif;
            background: #23232e;
            height: 8vh;

        }

        main{


            background: url("bd.jpg") no-repeat center center;
            background-size: cover;
            height: 92vh;
            
            



        }

        .nav-list{
            list-style: none;
            display: flex;
        }

        .nav-list li{

            letter-spacing: 3px;
            margin-left: 32px;
        }

        .mobile-menu{
            display: none;
            cursor: pointer;
        }

        .mobile-menu div{
            width: 32px;
            height: 2px;
            background: white;
            margin: 8px;


        }

        @media (max-width: 999px){
            body{
                overflow-x: hidden;
                
            }
            .nav-list{
                position: absolute;
                top: 8vh;
                right: 0;
                width: 50vw;
                height: 92vh;
                background: #23232e;
                flex-direction: column;
                align-items: center;
                justify-content: space-around;
                transform: translate(100%);
                transition: transform 0.3s ease-in;

            }

            .nav-list li {
                margin-left: 0;
                opacity: 0;
            }

            .mobile-menu {
                display: block;
            }

        }

        .nav-list.active {
            transform: translateX(0);
        }

        @keyframes navLinkFade {
            from {
                opacity: 0;
                transform: translateX(50px);

            }
            to {
                opacity: 1;
                transform: translateX(0);

            }
        }







    </style>
</head>
<body>
    <header>
        <nav >
    <a class="logo" href="home.php">Academia || Galpão</a>
    <div class="mobile-menu">
        <div class="linha1"></div>
        <div class="linha2"></div>
        <div class="linha3"></div>
    </div>
    <ul class="nav-list">
        <li><a href="Form.php">Cadastro de Alunos</a></li>
        <li><a href="alunos.php">Lista de Alunos</a></li>
        <li><a href="sair.php">Sair</a></li>

    </ul>
</nav>
    </header>
    <main></main>
    <script src="navbar-responsiva.js"></script>

    

</body>
</html>