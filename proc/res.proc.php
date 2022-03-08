<?php
// pantalla1 -> pantalla2
if(isset($_POST['enunciado1']) && strtolower($_POST['respuesta'])=='xxxx'){ //falta  definir solucion2 
    //recupero la sesión.
    session_start();
    $_SESSION['enunciado1']='check';

    header('Location: ../paginas/enunciado2.php');
} else if (isset($_POST['enunciado1'])){
    header('Location: ../paginas/enunciado1.php?msg=error');
}

// pantalla2 -> pantalla3
else if(isset($_POST['enunciado2']) && strtolower($_POST['respuesta'])=='xxxx'){ //falta  definir solucion2 
    //recupero la sesión.
    session_start();
    $_SESSION['enunciado2']='check';

    header('Location: ../paginas/enunciado3.php');
} else if (isset($_POST['enunciado2'])){
    header('Location: ../paginas/enunciado2.php?msg=error');
}

// pantalla3 -> pantalla4
else if(isset($_POST['enunciado3']) && strtolower($_POST['respuesta'])=='xxxx'){ //falta  definir solucion2 
    //recupero la sesión.
    session_start();
    $_SESSION['enunciado3']='check';

    header('Location: ../paginas/enunciado4.php');
} else if (isset($_POST['enunciado3'])){
    header('Location: ../paginas/enunciado3.php?msg=error');
}

// pantalla4 -> pantalla5
else if(isset($_POST['enunciado4']) && strtolower($_POST['respuesta'])=='xxxx'){ //falta  definir solucion2 
    //recupero la sesión.
    session_start();
    $_SESSION['enunciado4']='check';

    header('Location: ../paginas/enunciado5.php');
} else if (isset($_POST['enunciado4'])){
    header('Location: ../paginas/enunciado4.php?msg=error');
}

// pantalla5 -> pantalla6
else if(isset($_POST['enunciado5']) && strtolower($_POST['respuesta'])=='xxxx'){ //falta  definir solucion2 
    //recupero la sesión.
    session_start();
    $_SESSION['enunciado5']='check';

    header('Location: ../paginas/enunciado6.php');
} else if (isset($_POST['enunciado5'])){
    header('Location: ../paginas/enunciado5.php?msg=error');
}

// pantalla6 -> pantalla felicitacion
else if(isset($_POST['enunciado6']) && strtolower($_POST['respuesta'])=='xxxx'){ //falta  definir solucion2 
    //recupero la sesión.
    session_start();
    $_SESSION['enunciado6']='check';

    header('Location: ../paginas/felicidades.php');
} else if (isset($_POST['enunciado6'])){
    header('Location: ../paginas/enunciado6.php?msg=error');
}