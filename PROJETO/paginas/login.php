<?php
session_start();
include_once('config.php');


if (isset($_POST['email'], $_POST['senha'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $result = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ");

    if ($result->num_rows > 0) {
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        foreach ($rows as $row) {
            if ($row['permissao'] == 'administrador') {
                $_SESSION['id'] = $row['id'];
                $_SESSION['permissao'] = 'administrador';
                header('Location: ../index.php');
                exit;
            } else {
                $_SESSION['id'] = $row['id'];
                $_SESSION['permissao'] = '';
                header('Location: dois-fatores.php');
                exit;
            }
        }
    } else {
        echo 'email ou senha inválidos';
    }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #ff6961;
        }

        div {
            background-color: rgba(0, 0, 0, 0.9);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }

        input {
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }

        .InputSubmit {
            background-color: #ff6961;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;

        }

        .InputSubmit:hover {
            background-color: red;
            cursor: pointer;
        }
    </style>
</head>

<body>
<button onclick="paginalogin()"> Área de cadastro </button>
            <script>
                function paginalogin() {
                    window.location.href="formulario.php"
                }
                </script>
    
    <img src="../imagens/loginphp/telecal.png" width="25%">
    <div>
        <h1>Login</h1>
        <form action="" method="POST">
            <input type="text" placeholder="Email" name="email">
            <br><br>
            <input type="password" placeholder="Senha" name="senha">
            <br><br>
            <input class="InputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>

</html>