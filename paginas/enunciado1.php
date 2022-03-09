<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">

    <title>scaperoom</title>
</head>

<body id="fondo">
<div class="presen">
    <h1>Scaperoom hecho por Mr. Pol y Mr. Iker Layton</h1>
</div>
<br>
<div class="relleno">
    <p>Hemos averiguado la zona por la que suele operar. Pero hemos tenido un problema y se nos han desconfigurado las coordenadas, te las adjunto. A ver si te suena la zona.</p>
</div>
<br>
<br>
<br>
<div class="relleno">
    <p class="texto">Estas son las supuestas coordenadas</p>
    <p>2*(20.5).3499_1533_3293_346, (2*1).(5*2)68352069726366</p>
</div>
<br>
<br>
<br>
<div class="respu">
    <p>Dime, ¿te suena el edifcio de color azul de la zona?</p>
</div>
<br>
<div class="relleno">
    <p>Este edificio te suena? Que es?</p>
    <form action="../proc/res.proc.php" method="post">
        <input type="text" name="respuesta" placeholder="inserte respuesta">
        <input type="submit" name="enunciado1">
    </form>
</div>
<?php
//recupera la sesión
session_start();
if (!($_SESSION["enunciado1"]=='check')) {
    header("Location: ../index.html");
}
    
if (isset($_GET['msg'])) {
    echo '<p id="msg">'.$_GET['msg'].'</p>';
}
?>

</body>

</body>

</html>