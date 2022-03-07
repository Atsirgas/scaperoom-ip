<?php
//index a pantantalla 1
if (isset($respu) && $respu=="si") echo "checked";
if (isset($respu) && $respu=="no") echo "checked";

$respu=$_POST['respu'];
if($respu=="si"){
    header ('Location: ../paginas/enunciado1.php');
}
     else{
        header ('Location: ./despedida.html');
     }