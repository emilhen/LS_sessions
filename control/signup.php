<?php
require 'database.php';
$errorMessage = '';
$successMessage = '';

if (!empty($_POST['user']) && !empty($_POST['email']) && !empty($_POST['password'])) {

    $records = $conn->prepare('SELECT email FROM users WHERE email=:email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    // var_dump($results);

        if ($results==false) {

            $sql = "INSERT INTO users (user, email, password) VALUES (:user, :email, :password)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':user', $_POST['user']);
            $stmt->bindParam(':email', $_POST['email']);
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $stmt->bindParam(':password', $password);

            if ($stmt->execute()) {
                $successMessage = '¡USUARIO CREADO EXITOSAMENTE!';
            } else {
                $errorMessage = 'CREDENCIALES NO VALIDAS';
            }
        } else {
            $errorMessage = 'ESTE CORREO YA HA SIDO REGISTRADO';
        }
}
