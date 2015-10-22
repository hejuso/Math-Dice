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
    </div>
  
    <div class="row">
        <div class='col-xs-7'><h1>Dado aleatorio:</h1></div>
    </div>
    
    <div class="row">
        <?php 
            
            //Esta función genera un numero aleatorio y asigna ese número a la url de la imagen.
        
            dadoAleatorio();
            
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