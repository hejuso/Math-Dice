    
    <?php

    //Dados
include 'lib/dado.php';

include('lib/Juego.php');
?>
<html>
    <head>
        <?php
            include("lib/header.php");
            include 'lib/menu.php';
        ?>
        
    </head>
    <body>
        <div class="idioma">
            <form method="get"action="resultado.php">    
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
        <?php
        
        include "lib/menuUsuario.php";
        ?>
        
    <div class = "superponer1">
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
                            <img class="operacion operando" src="img/division.png" value="/" width='100px'></img>
                            <img class="operacion operando" src="img/multiplicacion.png" value="*" width='100px'></img>
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
<div class="superponer2">
    <div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h5 class="text-center">
                        Math Dice!</h5>
                    <form class="form form-signup" role="form">
                    <div class="form-group">
                        <?php
    
    
                        
                            //Preguntar a paco sobre el heredar la session de una pagina a otra
                            //include "lib/menuUsuario.php";
                        
                            //Comprobación y suma/resta de el numero introducido con el numero de los dados.
                        
                            
                            $strEval = $_POST['dadoTirada1'].$_POST['operacion1'].$_POST['dadoTirada2'].$_POST['operacion2'].$_POST['dadoTirada3'].$_POST['operacion3'].$_POST['dadoTirada4'].$_POST['operacion4'].$_POST['dadoTirada5'];
                            $dodecaedro = $_POST['dodecaedro1'];
                            
                            mathDice($strEval,$dodecaedro);
                        
                        ?>
                    </div>
                </div>
                <a href="juego.php" class="btn btn-sm btn-primary btn-block" role="button">
                    Volver</a> </form>
            </div>
        </div>
    </div>
</div>
</div> 
</div>
    
    
    </body>
</html>