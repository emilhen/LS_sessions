<?php require '../control/logged.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="/LS_sessions/assets/css/articles.css">
    <link rel="stylesheet" href="/LS_sessions/assets/css/navbar.css">
    <title>Accediste</title>
</head>

<body>

    <?php if (!empty($user)) : ?>
        <div class="userData">
            <div>Usuario: <?= $user['user'] ?></div>

            <div>Correo electrónico: <?= $user['email'] ?></div>
            <div>Inicio de sesión # <?= $user['sessionCounter'] ?></div>
            <div>
                <a href="/LS_sessions/control/logout.php">Logout</a>
            </div>
        </div>
    <?php endif; ?>

    <?php
    $articleNumber = random_int(1, 3);
    switch ($articleNumber) {
        case 1:
            require('js.view.php');
            break;
        case 2:
            require('html.view.php');
            break;
        case 3:
            require('php.view.php');
            break;

        default:
            # code...
            break;
    }
    ?>
</body>

</html>