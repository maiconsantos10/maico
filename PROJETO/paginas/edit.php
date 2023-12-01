<?php
    
    if(!empty($_GET['id']))
    {
        
        include_once('config.php');

        $id = $_GET['id'];

        $sqlSelect= "SELECT * FROM usuarios WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        print_r($result);

        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $nome_materno = $user_data['nome_materno'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $sexo = $user_data['genero'];
                $data_nasc = $user_data['data_nasc'];
                $cidade = $user_data['cidade'];
                $estado = $user_data['estado'];
                $endereco = $user_data['endereco'];
                $cpf = $user_data['cpf'];
                $login = $user_data['login'];
                $senha = $user_data['senha'];
                $senha2 = $user_data['senha2'];

                
            }
            print_r($nome);
        }
        else
        {
            header('Location: ../index.php');
        }
        


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
    <img src="../imagens/loginphp/telecal.png" width="25%">
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" value="<?php echo $nome ?>" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div><br>
                <div class="inputBox">
                    <input type="text" name="nome_materno" id="nome_materno"  class="inputUser" required>
                    <label for="nome_materno" class="labelInput">Nome materno</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email"  class="inputUser" required>
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
                <input type="radio" id="masculino" name="genero" value="masculino"  required>
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
                    <input type="text" name="endereco" id="endereco"  class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div> <br>
                <div class="inputBox">
                    <input type="number" name="cpf" id="cpf" minlength="11" maxlength="11"  class="inputUser" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <div class="inputBox"> <br>
                    <input type="text" name="login" id="login"  class="inputUser" required>
                    <label for="login" class="labelInput">Login</label>
                </div> <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha"  class="inputUser" required>
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