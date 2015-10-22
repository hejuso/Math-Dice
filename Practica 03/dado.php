<?php

    function dadoAleatorio(){
        //Necesito algo para no tener que repetir arrays.
        
        $arr1=array('dado1.png','dado2.png','dado3.png','dado4.png','dado5.png','dado6.png');
        
        $numAleatorio = rand(0,5);
            
        echo '<div class="col-xs-2"><img class="dado" src="img/'.$arr1[$numAleatorio].'"></img></div>';
   
    }
    
    function compSumaDado($dado1, $dado2, $num1, $num2){
        
        if($dado1 == $num1 && $dado2 == $num2){
            
            $suma = $num1 + $num2;
            
            return "La suma de ".$num1." y ".$num2." es igual a: ".$suma;
            
        }else{
            
            return "NO";
            
        }
        
    }
?>