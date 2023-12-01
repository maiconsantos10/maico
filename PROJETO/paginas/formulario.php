<?php

    if(isset($_POST['submit']))
    {
        //print_r('Nome: ' . $_POST['nome']);
        //print_r('<br>');
        //print_r('Nome materno: ' . $_POST['nome_materno']);
        //print_r('<br>');
        //print_r('Email: ' . $_POST['email']);
        //print_r('<br>');
       // print_r('Telefone: ' . $_POST['telefone']);
        //print_r('<br>');
       // print_r('Sexo: ' . $_POST['genero']);
        //print_r('<br>');
        //print_r('Data de nascimento: ' . $_POST['data_nascimento']);
        //print_r('<br>');
       // print_r('Cidade: ' . $_POST['cidade']);
       // print_r('<br>');
       // print_r('Estado: ' . $_POST['estado']);
       // print_r('<br>');
       // print_r('Endereço: ' . $_POST['endereco']);
        //print_r('<br>');
       // print_r('CPF: ' . $_POST['cpf']);
       // print_r('<br>');
        //print_r('Login: ' . $_POST['login']);
        //print_r('<br>');
        //print_r('Senha: ' . $_POST['senha']);
       // print_r('<br>');
        //print_r('Confirmação de senha: ' . $_POST['senha2']);
        //print_r('<br>');

        include_once('config.php');
        


        $nome = $_POST['nome'];
        $nome_materno = $_POST['nome_materno'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        $cpf = $_POST['cpf'];
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        $senha2 = $_POST['senha2'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,nome_materno,email,telefone,sexo,data_nasc,cidade,estado,endereco,cpf,login,senha,senha2) 
        VALUES ('$nome','$nome_materno','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco','$cpf','$login','$senha','$senha2')");


    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Telecall</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #ff6961;
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid #ff6961;
        }
        legend{
            border: 1px solid #ff6961;
            padding: 10px;
            text-align: center;
            background-color: #ff6961;
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: #ff6961;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-color: #ff6961;
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-color: red;
        }
    </style>
</head>
<body>
<button onclick="paginalogin()"> Área de login </button>
            <script>
                function paginalogin() {
                    window.location.href="login.php"
                }
                </script>
    <img src="../imagens/loginphp/telecal.png" width="25%">
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div><br>
                <div class="inputBox">
                    <input type="text" name="nome_materno" id="nome_materno" class="inputUser" required>
                    <label for="nome_materno" class="labelInput">Nome materno</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="number" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Sexo:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>
                <br><br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado"  class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div> <br>
                <div class="inputBox">
                    <input type="number" name="cpf" id="cpf" minlength="11" maxlength="11"  class="inputUser" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <div class="inputBox"> <br>
                    <input type="text" name="login" id="login" class="inputUser" required>
                    <label for="login" class="labelInput">Login</label>
                </div> <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div> <br>
                <div class="inputBox">
                    <input type="password" name="senha2" id="senha2" class="inputUser" required>
                    <label for="senha2" class="labelInput">Confirmação da senha</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
            
        </form>
    </div>
</body>
</html>