<?php

    session_start();
    if(isset($_SESSION['user_id'])){
        header('Location: /LS_sessions/views/logged.php');
    }
    require 'database.php';

    if(!empty($_POST['user']) && !empty($_POST['password'])){

        $records = $conn->prepare('SELECT id, user, email, password FROM users WHERE email=:user 
            OR user=:user');
        $records->bindParam(':user', $_POST['user']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);

        $errorMessage = "";

        if($results){
            if(count($results)>0 && password_verify($_POST['password'], $results['password'])){
                $_SESSION['user_id'] = $results['id'];
                header('Location: /LS_sessions/views/logged.php');
            }else $errorMessage = "LO SENTIMOS, LAS CREDENCIALES NO COINCIDEN";

        }else $errorMessage = "USUARIO NO EXISTENTE";
        
    }
