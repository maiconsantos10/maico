<?php
// Inicia a sessão
session_start();
// Destroi a sessão
session_destroy();
header("Location: login.php");
exit;
