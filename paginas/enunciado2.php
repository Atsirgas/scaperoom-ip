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
    <p class="texto">Chicos, casi le pillamos, se nos ha escapado por poco, pero se le ha caido este libro, a ver si encontramos alguna pista.</p>
</div>
<br>
<div class="relleno">
    <p class="texto">En el libro ponía escrito lo siguiente:</p>
    <p class="subt">Martes: 11:15 - 12:10 h</p>
    <p class="subt">Miercoles: 11:15 - 13:05 h</p>
</div>
<br>
<div class="respu">
    <p class="texto">Parece sacado de un horario, os suena de algo?</p>
    <form action="../proc/res.proc.php" method="post">
        <p class="texto"></p>
        <input type="text" name="respuesta" placeholder="inserte respuesta">
        <input type="submit" name="enunciado2">
    </form>
</div>

<?php
//recupera la sesión
session_start();
if (!($_SESSION["enunciado2"]=='check')) {
    header("Location: ../paginas/enunciado1.php");
}
?>
<?php
if (isset($_GET['msg'])) {
    echo '<p id="msg">'.$_GET['msg'].'</p>';
}
?>
    
</body>

</body>

</html>