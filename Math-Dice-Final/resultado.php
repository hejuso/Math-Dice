    
    <?php

    //Dados
include 'lib/dado.php';

include('auth.php');
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
    
    echo compSumaDado($_POST['dado1'], $_POST['dado2'], $_POST['num1'], $_POST['signo'], $_POST['num2']);
    
    ?>
    
    
    </body>
</html>