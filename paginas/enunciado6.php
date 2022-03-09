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
    <p class="texto">¡LO TENEMOS!</p>
    <p class="subt">Ya sabemos quien es, donde y cuando encontrarlo. En un rato estará ente rejas, muchas gracias. Antes hagamos un repaso.</p>
</div>
<br>
<div class="respu">
    <p class="texto">Nombre y apellidos del acusado?</p>
    <form action="../proc/res.proc.php" method="post">
        <input type="text" name="respuesta" placeholder="inserte respuesta">
        <input type="submit" name="enunciado6">
    </form>
</div>

    <?php
    //recupera la sesión
    session_start();
    if (!($_SESSION["enunciado6"]=='check')) {
        header("Location: ../paginas/enunciado5.php");
    }
    ?>
    <?php
    if (isset($_GET['msg'])) {
        echo '<p id="msg">'.$_GET['msg'].'</p>';
    }
    ?>
    
</body>

</body>