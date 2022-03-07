<?php
// pantalla1 -> pantalla2
if(isset($_POST['enunciado1']) && strtolower($_POST['respuesta'])=='xxxx'){ //falta  definir solucion2 
    //recupero la sesión.
    session_start();
    $_SESSION['enunciado1']='check';

    header('Location: ../paginas/enunciado2.php');
} else if (isset($_POST['enunciado1'])){
    header('Location: ../view/enunciado1.php?msg=error');
}

// pantalla2 -> pantalla3
else if(isset($_POST['enunciado2']) && strtolower($_POST['respuesta'])=='xxxx'){ //falta  definir solucion2 
    //recupero la sesión.
    session_start();
    $_SESSION['enunciado2']='check';

    header('Location: ../paginas/enunciado2.php');
} else if (isset($_POST['enunciado2'])){
    header('Location: ../paginas/enunciado2.php?msg=error');
}
