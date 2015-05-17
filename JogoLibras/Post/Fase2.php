<?php

extract($_POST);
$feliz = addslashes($feliz);
$surdo = addslashes($surdo);
$dia = addslashes($dia);
if ($feliz != "" && $surdo !="" && $dia !=""  ) {
  
   
    if ($feliz == "1" && $surdo =="3" && $dia =="2" ) {
         
      header("Location: http://localhost/JogoLibras/fase3.php");
   } else {
        header("Location: http://localhost/JogoLibras/fase2.php?errorLogin=2");
    }
} else {
    header("Location: http://localhost/JogoLibras/fase2.php?errorLogin=1");
}
?>