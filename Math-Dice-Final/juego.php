<?php
    //Dados
include 'lib/dado.php';

//Incluimos la clase Jugador

include('auth.php');

?>
<html>

<head>
        <?php
            include("lib/header.php");
        ?>
</head>

    <body>

        <?php
        include "lib/menu.php";
        include "lib/menuUsuario.php";
        ?>
        
        <div class="idioma">
            <form method="get"action="juego.php">    
                <div class="btn-group btn-group-primary">
                  <button class="btn btn-primary btn-md" type="button"><?php if($_GET['lang'] == 'en'){echo 'English';}else{echo 'Español';} ?></button>
                  <button data-toggle="dropdown" class="btn btn-primary btn-md dropdown-toggle" type="button">
                	  <span class="caret"></span></button>
                	  
                  <ul class="dropdown-menu">
                	  <li><input class="btn btn-sm btn-default" type="submit" name="lang" value="sp"></a></li>
                	  <li><input class="btn btn-sm btn-default" type="submit" name="lang" value="en"></a></li>
                  </ul>
                </div>
            </form>
        </div>

        <!-- Formulario en el que se comprueba el valor del dado con el del campo de texto -->
        <!--
        <div class='container'>
-->
            <form role="form" action="resultado.php" method="post">
              
                <div class="eligeDados">
                    
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
                
                </div>
                
                <div class="eligeSimbolo">
                
                    <h2>Elige símbolos:</h1>

                    <div class="simbolos">
                        
                        <?php if($jugador1->getTipo() == "junior+"){ ?>
                            <img class="operacion" src="img/mas.png" name="operacion" value="+" width='100px'></img>
                            <img class="operacion" src="img/menos.png" value="-" width='100px'></img>
                            <img class="operacion" src="img/division.png" value="/" width='100px'></img>
                            <img class="operacion" src="img/multiplicacion.png" value="*" width='100px'></img>
                            <input type="hidden" name="operacion1" value=""/>
                            <input type="hidden" name="operacion2" value=""/>
                            <input type="hidden" name="operacion3" value=""/>
                            <input type="hidden" name="operacion4" value=""/>
                        <?php }else{ ?>
                            <img class="operacion" src="img/mas.png" name="operacion" value="+" width='100px'></img>
                            <img class="operacion" src="img/menos.png" value="-" width='100px'></img>
                            <input type="hidden" name="operacion1" value=""/>
                            <input type="hidden" name="operacion2" value=""/>
                            <input type="hidden" name="operacion3" value=""/>
                            <input type="hidden" name="operacion4" value=""/>
                        <?php } ?>
                    </div>
                
                </div>

                <br>
                
                <div class="seleccion">
                
                    <h2>Selección</h3>
                    <div id="jugada">
                        
                        <input type="hidden" name="dadoTirada1" value=""/>
                        <input type="hidden" name="dadoTirada2" value=""/>
                        <input type="hidden" name="dadoTirada3" value=""/>
                        <input type="hidden" name="dadoTirada4" value=""/>
                        <input type="hidden" name="dadoTirada5" value=""/>
                        
                    </div>
                </div>
                <div id="btn-jugada"></div>
                
            </form>
        </div>

<script type="text/javascript" src="js/query.js"></script>
    </body>
</html>