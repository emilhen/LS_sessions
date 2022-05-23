<?php
    session_start();

    session_unset();
    session_destroy();
    $message = "Sesión cerrada con exito";
    header('Location: /LS_sessions/');
    // header('Location: /LS_sessions/views/index.php?message='.urlencode($message));
?>