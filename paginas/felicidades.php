<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Felicidades, ya has acabado!</h1>

    <a href="../index.html">volver</a>
    <?php
    //recupera la sesión
    session_start();
    if (!($_SESSION["felicidades"]=='check')) {
        header("Location: ../paginas/enunciado6.php");
    }
    ?>
</body>
</html>