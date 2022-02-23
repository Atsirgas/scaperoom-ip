<?php
// index -> pantalla1
if (isset($_POST['index']) && strtolower($_POST['solucion1'])=='xxxx') { //falta poner solucion1 
    //creo la sesión por 1ra vez.
    session_start();
    $_SESSION['pantalla1']='check';

    header('Location: ../paginas/enunciado1.php');
} else if(isset($_POST['index'])){
    header('Location: ../index.php?msg=error');
}
// pantalla1 -> pantalla2
else if(isset($_POST['enunciado1']) && strtolower($_POST['solucion2'])=='xxxx'){ //falta  definir solucion2 
    //recupero la sesión.
    session_start();
    $_SESSION['enunciado1']='check';

    header('Location: ../view/enunciado2.php');
} else if (isset($_POST['pantalla1'])){
    header('Location: ../view/enunciado1.php?msg=error');
}
