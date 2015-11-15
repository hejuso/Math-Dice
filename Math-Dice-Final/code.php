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
    <link rel="stylesheet" href="css/pruebas.css">


    </head>
    <body>
        
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#"><?php echo $menu['titulo'][$lang]?> </a>
            </div>
            <div>
              <ul class="nav navbar-nav">
                <li class="active"><a href="#"><?php echo $menu['portada'][$lang]?></a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $menu['tiposJuego'][$lang]?> <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <?php // Foreach anidado para generar el submenú
                    foreach( $menu['tiposJuego'] as $clave => $valor ){
                        
                        //If para comprobar si es un submenú (probablemente se puede prescindir de el)
                        if($clave == 'submenu'){
                            
                            //Con este foreach insertamos el array anteriormente recorrido en unas nuevas listas ordenadas
                        foreach ($valor as $tiposJu){ ?>
                            <li><a href="#"><?php echo $tiposJu[$lang] ?></a></li>
                    <?php } ?>
                    <?php }
                    }?>
                  </ul>
                </li>
                <li><a href="#"><?php echo $menu['instrucciones'][$lang]?></a></li>
                <li><a href="#"><?php echo $menu['acercaDe'][$lang]?></a></li>
              </ul>
            </div>
          </div>
        </nav>
        
<div class="container">
    
    <div class="row">
        <?php 
        //Aquí hacemos que nos muestre de forma automática las imágenes de los dados.
        echo dados1al6(); ?>
    
        <div class="col-xs-12">
            <div class="big-box">
                <div class="menuDerecha">
                    
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6 text-center">
                                <div class="well">
                                    
                                    <h4>Registro de movimientos</h4>
                                    <hr data-brackets-id="12673">
                                    
                                    <ul data-brackets-id="12674" id="sortable" class="list-unstyled ui-sortable">
                                        <strong class="pull-left primary-font">Pepe</strong>
                                        </br>
                                            <li class="ui-state-default">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </li>
                                        </br>
                                        <strong class="pull-left primary-font">Máquina</strong>
                                        </br>
                                        <li class="ui-state-default">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                                    </ul>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    
    </div>
    
    <div class="row">
        
        <h1>Dado aleatorio</h1>
        
        <?php 
            
            //Esta función genera un numero aleatorio y asigna ese número a la url de la imagen.
        
            echo dadoAleatorio();
            
        ?>
        
        <!-- Intento "fallido" de añadir un botón para que tire el dado.
             Por lo que parece hay que hacer uso de javascript y/o de AJAX, ya que
             no se pueden poner funciones de php en botones. 
            El botón lo único que hace es actualizar la pagina.     
        -->
        
        <div class="tirarDado">
            <form method="post">
            
                <input type="submit" name="submit" value='¡Tira el dado!' class='btn btn-primary'></input>
        
            </form>
        </div>
        
    </div>
  
</div>
        
    </body>
</html>