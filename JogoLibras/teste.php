
<html>
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>   Fase 3   </title>
        <script src="jquery-1.10.1.min.js"></script>
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
            <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
        <script type="text/javascript">
          
                   
            $(function(){
                function strcmp(str1, str2) {
 
            return ((str1 == str2) ? 0 : ((str1 > str2) ? 1 : -1));
           }
    $('.drag').draggable({
        connectToSortable: '.drop-container',
        helper: 'clone'
    });

    $('.drop-container').sortable({
        placeholder: 'placeholder',
        activate: function(event, ui){
            $('.drop-container p').remove();
        }
    });

    $('.lixeira').droppable({
        hoverClass: 'lixeira-ativa',
        drop: function(event, ui) {
            $(ui.draggable).remove();
        }
    });

    $('.salvar').click(function(){
        var valores = new Array();
        
        $('.drop-container .drag').each(function(){
            valores.push( $(this).html() );
        });
    
     
        
        
        if (strcmp(valores[0], valores[1]) > 0 ){
            
            if (strcmp(valores[1], valores[2]) < 0 ){
                  window.location="final.php"; 
            }
        
    }
        
    });
});
        </script>
        
        
        <style>
            *, *:before, :after {
    box-sizing: border-box;
}
* {
    margin: 0;
    padding: 0;
}

.clearfix:after {
    content: '.';
    display: block;
    clear: both;
    height: 0;
    font-size: 0;
    line-height: 0;
    visibility: hidden;
    overflow: hidden;
}

body {
    font-family: sans-serif;
    font-size: 14px;
    line-height: 1.5;
    margin: 20px;
}

/* Drag e Drop system */
.drag-container, 
.drop-container {
    width: 50%;
    background: #333;
    font-size: 0;
    text-align: center;
    float: left;
    color: #fff;
    height: 190px;
}
.drag, 
.placeholder {
    font-size: 12px;
    width: 90%;
    height: 50px;
    line-height: 50px;
    background: #0074a2;
    margin: 10px auto;
}
.drop-container {
    background: #222;
}
.drop-container p {
    font-size: 18px;
    line-height: 190px;
}
.placeholder {
    background: none;
    border: 1px dotted #eee;
}
.lixeira {
    margin: 20px 0;
    background: #ddd;
    border: 2px dotted #999;
    text-align: center;
    line-height: 50px;
    color: #999;
    font-weight: 700;
    font-size: 18px;
}
.lixeira-ativa {
    border: 2px dotted red;  
}
        </style>

    </head>
    <body background="fundo.jpg">
       <div align="center"  style=" margin-left: 415px; width: 560px; left: 315px;box-shadow: 3px 10px 19px rgba(0, 0, 0, 0.5);
                     -moz-box-shadow: 3px 10px 19px rgba(0, 0, 0, 0.5);
                     -webkit-box-shadow:3px 10px 19pxrgba(0, 0, 0, 0.5);">
                    <iframe width="560" height="315"  src="https://www.youtube.com/embed/I8OyJ-zvV_0" frameborder="0" allowfullscreen></iframe>
                
                
               </div>
        <br> <br> <br>  
                        <div class="drag-drop clearfix">

    <div class="drag-container clearfix">
         <div class="drag"> , outra orelha
Lava, Lava, lava Lava testa, bochecha
Lava o queixo, lava coxa e lava até meu pé, Meu

      </div> 
         <div class="drag"> querido pé que me aguenta o dia inteiro
 E o meu nariz, meu pescoço e etc</div>
        <div class="drag">Tchau Preguiça
Tchau Sujeira
Adeus cheirinho de suor
Lava, lava, lava
Lava, lava, lava
Uma orelha, uma orelha
Outro </div>
       
       
        
        
    </div> <!-- .drag-container -->

    <div class="drop-container clearfix">
        <p>Arraste a ordem correta da musica que aparece no video para aqui </p>
    </div> <!-- .drop-container -->
  
</div> <!-- .drag-drop -->

<div class="lixeira">
    Arraste aqui para apagar
</div> <!-- .lixeira -->

<button align="right" style="font-size:16px; font-weight:bold" class="Salvar" >Proximo</button>
 
 <embed src="midnight-ride-01a.mp3" autostart="true" loop="10" width="1" height="1"></embed>

    </body>
</html>



