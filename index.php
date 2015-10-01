<?php
//Array multilenguaje
$lang="en";
$menu=array(
    "titulo"=>array(
        "sp"=>"Math Dice",
        "en"=>"Math Dice"
        ),
    "portada"=>array(
        "sp"=>"Inicio",
        "en"=>"Home"
        ),
    "tiposJuego"=>array(
        "sp"=>"Tipos de juego",
        "en"=>"Game modes",
        "submenu"=>array(
            "tipo1"=>array(
                "sp"=>"Juego estándar",
                "en"=>"Standard Game"
                ),
            "tipo2"=>array(
                "sp"=>"Juego dificil",
                "en"=>"Hard Game"
                ),
            "tipo3"=>array(
            "sp"=>"Juego personalizado",
            "en"=>"Custom Game"
            ),
            )
        ),
    "instrucciones"=>array(
        "sp"=>"Instrucciones",
        "en"=>"Instructions"
        ),
    "acercaDe"=>array(
        "sp"=>"Acerca de",
        "en"=>"About"
        ),
    )
    
?>
<html>
    <head>
        <title>Docuemento de prueba</title>
        <meta charset="UTF-8">
 <!-- Bootstrap -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        
    </head>
    <body>
        
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <?php //foreach ($menu as $item): ?>
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Math dice</a>
            </div>
            <div>
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                      
                    <li><a href="#">Page 1-1</a></li>
                    <li><a href="#">Page 1-2</a></li>
                    <li><a href="#">Page 1-3</a></li>
                    
                  </ul>
                </li>
                <li><a href="#">Page 2</a></li>
                <li><a href="#">Page 3</a></li>
              </ul>
            </div>
            <?php //endforeach; ?>
          </div>
        </nav>
        
    </body>
</html>