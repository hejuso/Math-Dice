<?php

    $arr1=array('dado1.png','dado2.png','dado3.png','dado4.png','dado5.png','dado6.png');
    
    function dados1al6(){
        
        //Sentencia FOR para mostrar los dados.
        
        global $arr1;

        for($i=0; $i<count($arr1); $i++) {
            
            echo '<div class="col-xs-2"><img class="dado" src="img/'.$arr1[$i].'"></img></div>';
            
        }
    
    }
    
    function dadoAleatorio(){
        //Necesito algo para no tener que repetir arrays.
        
        global $arr1;
        
        $numAleatorio = rand(0,5);
            
        echo '<div class="col-xs-2"><img class="dado" src="img/'.$arr1[$numAleatorio].'"></img></div>';
   
    }
    
?>