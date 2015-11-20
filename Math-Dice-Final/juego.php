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
        <!--
        <div class='container'>
-->
            <form role="form" action="resultado.php" method="post">
              

                   <h2>Elige dados:</h1>


                    <?php
                        //Esta función genera un numero aleatorio y asigna ese número a la url de la imagen.

                        dadoAleatorio(1);
                        dadoAleatorio(2);
                        dadoAleatorio(3);
                        
                    ?><br><br><?php
                    
                        dadoDe3Aleatorio(1);
                        dadoDe3Aleatorio(2);
                        
                    ?><br><br><?php
                    
                        dadoDodecaedro(1);
                        
                    ?>
<div>
                <h2>Elige símbolos:</h1>

                <div class="simbolos">
                    <img class="operacion" src="img/mas.png" width='100px'></img>
                    <img class="operacion" src="img/menos.png" width='100px'></img>
                </div>
</div>
                <br>
                <h2>Selección</h3>
                <div id="jugada"></div>
                <div id="btn-jugada"></div>
                
            </form>
        </div>

<script type="text/javascript" src="js/query.js"></script>
    </body>
</html>