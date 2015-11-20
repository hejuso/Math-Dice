    
    <?php

    //Dados
include 'lib/dado.php';

include('auth.php');
include('lib/Juego.php');
?>
<html>
    
    <?php
        include("lib/header.php");
    ?>
    
    <body>
        
    <?php
    
    include 'lib/menu.php';
    
    //Preguntar a paco sobre el heredar la session de una pagina a otra
    //include "lib/menuUsuario.php";

    //Comprobación y suma/resta de el numero introducido con el numero de los dados.
    
        
        $strEval = $_POST['dadoTirada1'].$_POST['operacion1'].$_POST['dadoTirada2'].$_POST['operacion2'].$_POST['dadoTirada3'].$_POST['operacion3'].$_POST['dadoTirada4'].$_POST['operacion4'].$_POST['dadoTirada5'];
        $dodecaedro = $_POST['dodecaedro1'];
        
        echo 'ECHO! '.$strEval;
        
        mathDice($strEval,$dodecaedro);
    
    ?>
    
    
    </body>
</html>