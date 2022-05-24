<?php

session_start();
if (isset($_SESSION['user_id'])) {
    header('Location: /LS_sessions/views/logged.php');
}
require 'database.php';

if (!empty($_POST['user']) && !empty($_POST['password'])) {

    $records = $conn->prepare('SELECT id, user, email, password FROM users WHERE email=:user 
            OR user=:user');
    $records->bindParam(':user', $_POST['user']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $errorMessage = "";

    if ($results) {
        if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
            $_SESSION['user_id'] = $results['id'];

            $records1 = $conn->prepare('SELECT id, sessionCounter FROM users WHERE id = :id');
            $records1->bindParam(':id', $_SESSION['user_id']);
            $records1->execute();
            $results1 = $records1->fetch(PDO::FETCH_ASSOC);

            $contador = $results1['sessionCounter'] + 1;

            $sql = "UPDATE users SET sessionCounter = '$contador' WHERE id = :id";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $_SESSION['user_id']);
            $stmt->execute();


            header('Location: /LS_sessions/views/logged.view.php');
            exit();
        } else $errorMessage = "*LO SENTIMOS, LAS CREDENCIALES NO COINCIDEN";
    } else $errorMessage = "*USUARIO NO EXISTENTE";
}
