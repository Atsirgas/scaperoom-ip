<?php

//index a pantantalla 1
if (isset($respu) && $respu=="si") echo "checked";
if (isset($respu) && $respu=="no") echo "checked";

$respu=$_POST['respu'];
if($respu=="si"){
    header ('Location: ./paginas/enunciado1.php');
}
     else{
        header ('Location: ./despedida.html');
     }

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
