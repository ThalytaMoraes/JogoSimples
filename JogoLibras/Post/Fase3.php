<?php

extract($_POST);
$feliz = addslashes($feliz);
$surdo = addslashes($surdo);
$dia = addslashes($dia);
if ($feliz != "" && $surdo !="" && $dia !=""  ) {
  
   
    if ($feliz == "2" && $surdo =="3" && $dia =="1" ) {
         
      header("Location: http://localhost/JogoLibras/teste.php");
   } else {
        header("Location: http://localhost/JogoLibras/fase3.php?errorLogin=2");
    }
} else {
    header("Location: http://localhost/JogoLibras/fase3.php?errorLogin=1");
}
?>