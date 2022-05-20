<?php

require '../control/logged.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Accediste</title>
</head>
<body>

    <?php if(!empty($user)): ?>
        <br>Welcome. <?= $user['user'] ?>
        <br>Email. <?= $user['email'] ?>
        <br>You are Succesfully logged in 
        <a href="/LS_sessions/control/logout.php">Logout</a>
        <?php else: ?>
    <?php endif; ?>

</body>
</html>