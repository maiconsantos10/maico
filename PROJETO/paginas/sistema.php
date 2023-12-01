<?php
// SESSÃO INICIADA
session_start();
// PEGANDO ID DA SESSÃO E A PERMISSAO DA SESSÃO
var_dump($_SESSION['id'], $_SESSION['permissao']);

echo '<hr>sessão privada';

?>
<a href="sair.php" class="btn btn-danger me-5"> Sair</a>


