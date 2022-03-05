<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Página Principal</title>
</head>

<body>
    <header>
        <form action="./respuesta1.php">
            <button id="btn-1" type="button" onclick="abrirDialogo('dialogo1')"><img src="./img/layton.png" id="layton"></button>

            <dialog id="dialogo1">

                <p>Hola, soy el profesor Layton, bienvenido a mi agencia.</p>

                <input type="radio" name="resp" value="si"><label>¡Por supuesto!</label>
                <input type="radio" name="resp" value="no"><label>Búscate a otro</label>
                <button type="submit" class="btn btn-primary">Enviar</button>

            </dialog>
        </form>
    </header>

    <script>
        function abrirDialogo() {
            document.getElementById("dialogo1").style.display = 'block'
        }
    </script>
</body>

</html>
