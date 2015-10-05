<?php
//Array multilenguaje
$lang="sp";
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
        <title>Documento de prueba</title>
        <meta charset="UTF-8">
 <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
    </head>
    <body>
        
           <li class="active"><a href="#"><?php echo $menu['portada'][$lang] ?></a></li>

    </body>
</html>