
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>   Fase 1   </title>
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
             
                 >  
                <div align="center"  style=" margin-left: 115px; width: 560px; left: 315px;box-shadow: 3px 10px 19px rgba(0, 0, 0, 0.5);
                     -moz-box-shadow: 3px 10px 19px rgba(0, 0, 0, 0.5);
                     -webkit-box-shadow:3px 10px 19pxrgba(0, 0, 0, 0.5);">
                    <img src="mulher.gif"></div>
            </div>
            <div id="login">
                <p></p>
              <br><br><br><br><br>


                <form id="formu" method="POST" action="Post/Fase1.php">
                    <fieldset style="border: none">  
                        <div id="user_div" >
                            <label><h6> Qual a palavra do video?</h6></label>
                           
                            
                                <p>
                                     <input type="radio" name="fase1" value="1"> Mulher 
                                </p>
                                <p>
                                       <input type="radio" name="fase1" value="2"> Homem 
                                </p>
                                
                                <p>
                                       <input type="radio" name="fase1" value="3"> Avô  
                                </p>
                                
                                 <p>
                                       <input type="radio" name="fase1" value="4"> Avó
                                </p>
                        </div>
                        
                        <div id="enter_img_div">
                            <label><p></p></label>
                            <input type="submit" value="   Proximo   "   align="right" style="font-size:16px; font-weight:bold">


                        </div>
                        <br>

                        <div>
                           Dica : Dia 8 de março é comemorado seu dia <br>
                            

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


