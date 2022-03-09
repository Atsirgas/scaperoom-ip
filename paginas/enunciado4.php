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
    <p class="texto">¡Perfecto!</p>
    <p class="subt">Hemos hablado con el director del instituto y ha accedido a darnos una foto a cambio de que le arreglemos la página web, puedes echarle un ojo y solucionarlo?</p>
    <img src="../img/imagenEh.png">
</div>
<br>
<div class="respu">
    <p class="texto">¿Donde están los errores?</p>
    <form action="../proc/res.proc.php" method="post">
        <input type="text" name="respuesta" placeholder="inserte respuesta">
        <input type="submit" name="enunciado4">
    </form>
</div>

    <?php
    //recupera la sesión
    session_start();
    if (!($_SESSION["enunciado4"]=='check')) {
        header("Location: ../paginas/enunciado3.php");
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