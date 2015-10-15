<?php 
       
       //Array multilenguaje
    include 'conf.php';
        
        //Dados
    include 'dado.php';
        
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
        
        //Pruebas para insercion de dado.
        
            echo dadoAleatorio();
            
        ?>
        
        <!-- Pruebas para el botón de tirar dado -->
        
        <form method="post">
            
            <div class='tirarDado'><input type="submit" name="submit" value='¡Tira el dado!' class='btn btn-primary'></input></div>
        
        </form>
        
        <?php
        
            //Intento de que cuando detecte un submit de el botón cambie la imagen. Efectivamente lo hace, pero actualiza la página, cosa que no quiero.
            
            if(isset($_POST["submit"])) {
                
                echo dadoAleatorio();
                
            }
        
        ?>
        
    </body>
    
</html>