<?php
    session_start();

    session_unset();
    session_destroy();
    
    setcookie('sessionStatus', 'Sesión cerrada con exito', time() + 3, '/');
    header('Location: /LS_sessions/');
?>