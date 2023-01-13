<?php

     if(isset($_POST['submit']));
    {
        // print_r('Login: '. $_POST['login']);
        // print_r('<br>');
        // print_r('Senha:' . $_POST['senha']);
        // print_r('<br>');
        // print_r('Nome: '. $_POST['nome']);
        // print_r('<br>');
        // print_r('Sobrenome: '. $_POST['sobrenome']);
        // print_r('<br>');
        // print_r('Genero: '. $_POST['genero']);
        // print_r('<br>');
        // print_r('Data de Nascimento: '. $_POST['data_nascimento']);
     

     include_once('config.php');

     if ( isset( $login) || isset( $senha) || isset($nome) || isset ($sobrenome) || isset ($genero) || isset ($data_nasc)){
  
       
       
        echo "Login: $login <br>";
        echo "Senha: $senha <br>";
        echo "Nome: $nome <br>";
        echo "Sobrenome: $Sobrenome <br>";
        echo "Genero: $Genero <br>";
        echo "Data de nascimento: $data_nasc <br>";  

     
     $login = $_POST['login'];
     $senha= $_POST['senha'];
     $nome = $_POST['nome'];
     $sobrenome = $_POST['sobrenome'];
     $genero = $_POST['genero'];
     $data_nasc = $_POST['data_nascimento'];

     
         $result= mysqli_query($conexao,"INSERT INTO formulario (login, senha, nome,sobrenome,sexo,data) 
        VALUES ('$login','$senha','$nome','$sobrenome','$genero','$data_nasc' )");
     }
     
    }

    
?>

<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Title>Formulário | GN</Title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, dodgerblue,rgb(10, 60, 109));   
        }
        .box{ 
            color: aliceblue;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgb(112, 109, 109);
            padding: 15px;
            border-radius: 15px;
            color: floralwhite;
            width: 20%;
        }
    
        fieldset{
            border: 3px solid rgb(47, 98, 148);
        }
        legend{
            border: 1px solid rgb(206, 206, 226);
            padding: 10px;
            text-align: center;
            background-color: rgb(155, 155, 182);
            border-radius: 5px;
        }
        .inputbox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white ;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .inputUser:focus ~ .labelImput,
        .inputUser:valid ~ .labelImput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        
         #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            Font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right, darkblue, darkblue );
            width: 100%;
            border: none;
            padding: 15px;
            color: aliceblue;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(black);
        }
    </style>
</head>
<body>
<a href="carla.php">Voltar</a>
    <div class="box">
        <form action="formulario1.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário</b></legend>
                <Br>
                <div class="inputBox">
                    <input type="text" name="login" id="login" class="inputUser" necessário>
                    <label for="login" class="labelInput">Login</label >
                </Div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="senha" id="senha" class="inputUser" necessário>
                    <label for="senha" class="labelInput">Senha</label >
                </Div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" necessário>
                    <label for="nome" class="labelInput">Nome</label >
                    </Div>
                    <br><br>
                    <div class="inputBox">
                        <input type="text" name="sobrenome" id="sobrenome" class="inputUser" necessário>
                        <label for="sobrenome" class="labelInput">Sobrenome</label >
                </Div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" necessário>
                <label for="feminino">Feminino</label >
                <Br>
                <input type="radio" id="masculino" name="genero" value="masculino" necessário>
                <label for="masculino">Masculino</label >
                <Br>
                <input type="radio" id="outro" name="genero" value="outro" necessário>
                <label for="outro">Outro</label > 
                <div class="inputBox">  
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label >
                <input type="date" name="data_nascimento" id="data_nascimento" necessário>
                </Div>
                <br><br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </Div>
</body>
</html>
