<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">

    <title>scaperoom</title>
</head>

<body>
<p>soy la 3</p>

<form action="../proc/res.proc.php" method="post">
        <input type="text" name="respuesta" placeholder="inserte respuesta">
        <input type="submit" name="enunciado3">
    </form>

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