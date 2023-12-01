<?php
session_start();
include_once('config.php');
$id = $_SESSION['id'];


function consultarUsuario($conexao, $id)
{
    $consultar = mysqli_query($conexao, "SELECT * FROM usuarios WHERE id = $id ");
    $resultado = '';
    if ($consultar->num_rows > 0) {
        $rows = $consultar->fetch_all(MYSQLI_ASSOC);
        foreach ($rows as $row) {

            $resultado = array(
                'data_nasc' => $row['data_nasc'],
                'nome_materno' => $row['nome_materno'],
            );
        }
    }

    return $resultado;
}




function pegarPergunta()
{
    $perguntas = array(
        'qual-o-nome-da-sua-mae' => 'Qual o nome da sua mae?',
        'qual-a-data-do-seu-nascimento' => 'Qual a data do seu nascimento?'
    );

    $slugAleatoria = array_rand($perguntas);
    $perguntaAleatoria = $perguntas[$slugAleatoria];
    return array(
        'pergunta' => $perguntaAleatoria,
        'slug' => $slugAleatoria
    );
}

$pergunta = pegarPergunta();


if (isset($_POST['resposta'], $_POST['slug'])) {
    $slug = $_POST['slug'];
    $resposta =  $_POST['resposta'];
    $procurarDados = consultarUsuario($conexao, $id);
    if ($slug == 'qual-o-nome-da-sua-mae') {
        $nomeMaterno = $procurarDados['nome_materno'];
        if ($nomeMaterno == $resposta) {
            header('Location: ../index.php');
            exit;
        } else {
            echo 'resposta errada';
        }
    } elseif ($slug == 'qual-a-data-do-seu-nascimento') {
        $nascimento = $procurarDados['data_nasc'];
        $respostaFormatada = date("Y-m-d", strtotime(str_replace("/", "-", $resposta)));
        if ($nascimento == $respostaFormatada) {
            header('Location: ../index.php');
            exit;
        } else {
            echo 'resposta errada';
        }
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
    <img src="../imagens/loginphp/telecal.png" width="25%">
    <div>
        <h1><?= $pergunta['pergunta'] ?></h1>
        <form action="" method="POST">
            <input type="hidden" name="slug" value="<?= $pergunta['slug'] ?>">
            <input type="text" placeholder="resposta" name="resposta">
            <br><br>
            <input class="InputSubmit" type="submit" name="submit" value="Enviar">
        </form>
    </div>
</body>

</html>