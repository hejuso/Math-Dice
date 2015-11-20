<?php
    $puntos = 0;

    function mathDice($valorEval,$dadoDode){
        echo '<br>';
        
        echo 'Resultado de la var Eval: ';
        eval("echo $valorEval;");

        
    }
    
    function ganaPuntos(){
        
        $this->puntos += 10;
        
    }

?>