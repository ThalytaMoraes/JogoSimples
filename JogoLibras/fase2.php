
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>   Fase 2    </title>
        <link rel="stylesheet" href="templatemo_style.css" type="text/css">
        <link rel="stylesheet" href="Estilo-Login.css" type="text/css">

        <script src="jquery-1.4.1.min.js"></script>
        <script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>
        <script type="text/javascript" src="JavaScript/jquery.fancybox.js?v=2.1.5"></script>
        <link rel="stylesheet" type="text/css" href="JavaScript/jquery.fancybox.css?v=2.1.5" media="screen" />

        <script type="text/javascript">
            $(document).ready(function() {
                $('.fancybox').fancybox();
            });
        </script>


    </head>
    <body background="fundo.jpg">
        <div id="geral">

            <div id="video">
             
                 <br>
                  <br>  <br> <br> <br><br> 
                <div align="center"  style=" margin-left: 115px; width: 560px; left: 315px;box-shadow: 3px 10px 19px rgba(0, 0, 0, 0.5);
                     -moz-box-shadow: 3px 10px 19px rgba(0, 0, 0, 0.5);
                     -webkit-box-shadow:3px 10px 19pxrgba(0, 0, 0, 0.5);">
                   <img src="feliz_dia_do_surdo.gif">
                
               </div>
            </div>
            <div id="login">
                <p></p>
              <br><br><br><br><br>


                <form id="formu" method="POST" action="Post/Fase2.php">
                    <fieldset style="border: none">  
                        <div id="user_div" >
                            <label><h6> Ordene as palavras e monte a frase do video</h6></label>
                           
        
                                <p>
                                  Feliz       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="radio" name="feliz" value="1"> 1 
                                              <input type="radio" name="feliz" value="2"> 2 
                                               <input type="radio" name="feliz" value="3"> 3 
                                  
                                </p>
                                <p>
                                      Do surdo      &nbsp&nbsp  <input type="radio" name="surdo" value="1"> 1 
                                                    <input type="radio" name="surdo" value="2"> 2 
                                                     <input type="radio" name="surdo" value="3"> 3 
                                </p>
                                
                                <p>
                                      Dia        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="radio" name="fase1" value="1"> 1 
                                               <input type="radio" name="dia" value="2"> 2 
                                                <input type="radio" name="dia" value="3"> 3  
                                </p>
                                
                                
                        </div>
                        
                        <div id="enter_img_div">
                            <br>
                            <label><p></p></label>
                            <input type="submit" value="   Proximo   "   align="right" style="font-size:16px; font-weight:bold">


                        </div>
                        <br>

                        <div>
                           Dica : Comemoração do dia 26 de setembro <br>
                            

                        </div>
                    </fieldset>
                </form>

               <div id="texto" style="color: red;margin-left: 110px">
                    <?php
                   
                        if (isset($_GET["errorLogin"]))
                        if ($_GET["errorLogin"] == "1") {
                            echo "Voce precisa escolher uma resposta!";
                        } else if ($_GET["errorLogin"] == "2") {
                            echo "Você errou, tente novamente";
                        }
                    ?>
                </div>



            </div> 

     <embed src="midnight-ride-01a.mp3" autostart="true" loop="10" width="1" height="1"></embed>

        </div>
    </body>
</html>


