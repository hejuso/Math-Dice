    
    <?php

    //Dados
include 'lib/dado.php';

include('auth.php');
?>
<html>
    <head>
        <title>Math Dice</title>
        <meta charset="UTF-8">
        
 <!-- Bootstrap -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dado.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
 
    </head>
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