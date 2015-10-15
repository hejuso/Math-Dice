<?php
    
    function dados1al6(){
        
                //Sentencia FOR para mostrar los dados.
        
        for($i = 1 ; $i <= 6; $i++){
            
            echo "<div class='col-xs-2'><img class='dado' src='img/dado".$i.".png'></img></div>";
            
        }
        
    }
    
    function dadoAleatorio(){
        
        $numAleatorio = rand(1,6);
        
        echo "<div class='col-xs-2'><img class='dado' src='img/dado".$numAleatorio.".png'></img></div>";
        
    }

?>