<?php

    function dadoAleatorio($num){
        
        //Necesito algo para no tener que repetir arrays.
        
        $arr1=array('dado1.png','dado2.png','dado3.png','dado4.png','dado5.png','dado6.png');
        
        $numAleatorio = rand(0,5);
        $numAleatorioMas1 = $numAleatorio+1;
            
        echo '<div class="col-xs-6"><img class="dado" src="img/'.$arr1[$numAleatorio].'"></img></div>';
       
        echo '<input type="hidden" name="dado'.$num.'" value="'.$numAleatorioMas1.'">';
        
    }
    
    function compSumaDado($dado1, $dado2, $num1, $signo ,$num2){
        
        if($dado1 == $num1 && $dado2 == $num2){
        
            if($signo == "+"){
                $suma = $num1 + $num2;
                return "
                CORRECTO
                <br>
                La suma de ".$num1." y ".$num2." es igual a: ".$suma;
                
            }else if($signo == "-"){
                
                $resta = $num1 - $num2;
                return "CORRECTO
                <br>
                La resta de ".$num1." y ".$num2." es igual a: ".$resta;
                
            }
        
        }else{
            
            return "ERROR
                    <br>
                    El dado1: ".$dado1." o el dado2: ".$dado2." no coinciden con los numeros que has introducido.<br>
                    
                    Numero 1: ".$num1."<br>
                    Numero 2: ".$num2;
            
        }
        
    }
?>