<?php

include('auth.php');

    function mathDice($valorEval,$dadoDode){

        ob_start();//Abrimos el búfer para almacenar todo lo que devuelva el eval
        
        eval("echo $valorEval;");
            
        $valor = ob_get_contents();
        
        ob_end_clean();//Lo cerramos
        
        if ($valor == $dadoDode){
            
            ganaPuntos();
            echo '<h1>¡Correcto!, ahora tienes '.$_SESSION['jugador']->getPuntos().' puntos</h1>';
            
            
        }else{
            
            echo '<h1>Incorrecto!</h1>';

        }

        
    }
    
    function ganaPuntos(){
        
        $_SESSION['jugador']->setPuntos($_SESSION['jugador']->getPuntos() + 10);
        
    }
    
?>