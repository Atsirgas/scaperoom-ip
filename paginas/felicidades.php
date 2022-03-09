<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body id="fondo">
<div class="presen">
    <h1>Scaperoom hecho por Mr. Pol y Mr. Iker Layton</h1>
</div>
<br>
<br>
    <div class="relleno">
        <h1 class="texto">¡FELICIDADES LO HABÉIS ATRAPADO!</h1>
    </div>
    <br>
    <br>
    <br>
        <img src="../img/carcel.jpg" id="carcel">
    <br>
    <br>
    <br>
    <div class="relleno"> 
        <a href="../index.html">VOLVER</a>
    </div>
    <?php
    //recupera la sesión
    session_start();
    if (!($_SESSION["felicidades"]=='check')) {
        header("Location: ../paginas/enunciado6.php");
    }
    ?>
</body>
</html>