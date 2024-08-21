<?php
// Inicia a sessão caso ainda não tenha sido iniciada
session_start();

// Se o usuário não estiver logado, redireciona para login.php
if (!isset($_SESSION['user_id']) || $_SESSION['user_id'] <= 0) {
    header('Location: login.php');
    exit();
}

// Se o estágio de autenticação não estiver completo, redireciona para verify_2fa.php
if (!isset($_SESSION['auth_stage']) || $_SESSION['auth_stage'] != 1) {
    header('Location: verify_2fa.php');
    exit();
}
?>