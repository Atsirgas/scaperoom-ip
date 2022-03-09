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
    <p class="texto">Bien resuelto</p>
    <p class="subt">Vale, ha cumplido, a medias... Nos ha dado una lista con los posibles profesores, como ayuda nos ha facilitado esta foto</p>
</div>
<br>
<div class="relleno">
    <img src="../img/danny.jpg" id="danny">
</div>
<div class="respu">
    <p class="texto">¿Te suena de algo?</p>
    <form action="../proc/res.proc.php" method="post">
        <input type="text" name="respuesta" placeholder="inserte respuesta">
        <input type="submit" name="enunciado5">
    </form>
</div>
    <?php
    //recupera la sesión
    session_start();
    if (!($_SESSION["enunciado5"]=='check')) {
        header("Location: ../paginas/enunciado4.php");
    }
    ?>
    <?php
    if (isset($_GET['msg'])) {
        echo '<p id="msg">'.$_GET['msg'].'</p>';
    }
    ?>
    
</body>

</body>