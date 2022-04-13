<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academia Galpão</title>

    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, black, red);
        }

        .Login{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: white;


        }

        .Nome{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;

        }

        .Senha{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;

        }

        .Enviarr{
            background-color: red;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;

        }

        .Enviarr:hover{
            background-color: rgb(107, 9, 9);
            cursor: pointer;
        }

     

     



    </style>
</head>
<body>
    <a href="home.php" style="position: absolute;">Back</a>
    <div class="Login">
        <h1>Login</h1>
        <form action="testLogin.php" method="POST">

        <input type="text" name="email" placeholder="Email" class="Nome" required>
        <br><br>
        <input type="password" name= "senha" placeholder="Senha" class="Senha">
        <br><br>
        
        <input type="submit" class="Enviarr" name="submit" value="Enviar">
        
        </form>
        
    </div>
    
</body>
</html>