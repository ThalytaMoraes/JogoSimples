<?php



extract($_POST);
$Resposta = addslashes($fase1);

if ($Resposta != "") {
  
   
    if ($Resposta == "1") {
         
      header("Location: http://localhost/JogoLibras/fase2.php");
   } else {
        header("Location: http://localhost/JogoLibras/index.php?errorLogin=2");
    }
} else {
    header("Location: http://localhost/JogoLibras/index.php?errorLogin=1");
}
?>