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
    <p class="texto">¡Muy bien chicos!</p>
    <p class="subt">Nos estamos acercando, ahora sabemos que es profesor en ese instituto, y que da algo llamado lenguaje de marcas, ahora solo falta saber de que curso.</p>
</div>
<br>
<div class="respu">
    <form action="../proc/res.proc.php" method="post">
        <p class="texto">Dime, has averiguado de que curso es profesor? Recuerda que tiene que coincidir con el horario.</p>
        <input type="text" name="respuesta" placeholder="inserte respuesta">
        <input type="submit" name="enunciado3">
    </form>
</div>

    <?php
    //recupera la sesión
    session_start();
    if (!($_SESSION["enunciado3"]=='check')) {
        header("Location: ../paginas/enunciado2.php");
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