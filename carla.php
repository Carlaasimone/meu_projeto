<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, dodgerblue);
        }
        div{
            background-color: rgb(0,0,0,0.8);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: floralwhite;
        }
        input{
            pad: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        button{
            background-color: dodgerblue;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;

        }
        button:houver{
            background-color: deepskyblue;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <a href="inicio.php">Voltar</a>
    <div>
        <h1>login</h1>
        <form action="testlogin.php">
        <input type="text" placeholder= "Login">
        <br><br>
        <input type="password" placeholder="Senha">
        <br><br>
        <button>ENTRAR</button>
    </div>
</body>
</html>