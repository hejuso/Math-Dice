<?php
    //Dados
include 'lib/dado.php';

//Incluimos la clase Jugador

include('auth.php');

?>
<html>

<?php
    include("lib/header.php");
?>

    <body>

        <?php
        include "lib/menu.php";
        include "lib/menuUsuario.php";
        ?>
  
        <!-- Formulario en el que se comprueba el valor del dado con el del campo de texto -->
        
        <div class='container'>

                <form role="form" action="resultado.php" method="post">
                  
                    <div class="row">
                        <div class='col-xs-12'><h1>Dado aleatorio:</h1></div>
                    </div>
                    
                    <div class="container-fluid">
                        <div class="row">
                            <div class='col-xs-7'>
                            
                            <?php 
                                //Esta función genera un numero aleatorio y asigna ese número a la url de la imagen.

                                dadoAleatorio(1);
                                dadoAleatorio(2);
                                dadoAleatorio(3);
                                    
                                dadoDe3Aleatorio(1);
                                dadoDe3Aleatorio(2);
                                
                                dadoDodecaedro(1);
                            ?>
                            
                            </div>
                            <div class='col-xs-3'>
                            <div class="form-group">
                                <label for="text">Dado 1</label>
                                <input type="text" class="form-control" name="num1" id="text">
                            </div>
                      
                            <div class="radio">
                                <label><input type="radio" name="signo" checked value="+"> + </label><br>
                                <label><input type="radio" name="signo" value="-"> - </label>
                            </div>
                      
                            <div class="form-group">
                                <label for="text">Dado 2</label>
                                <input type="text" name="num2" class="form-control">
                            </div>
                            
                            <button type="submit" class="btn btn-default">Enviar</button>
                            </div>
                        </div>    
                    </div>
                </form>
        </div>
        
    </body>
</html>