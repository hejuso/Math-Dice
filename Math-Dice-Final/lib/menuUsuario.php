
<div class="prueba">Prova</div>
    
    <div class="infoUsu">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="prueba">
                        <div class="well well-sm">
                            <div class="row">
                                <div class="col-sm-6 col-md-4">
                                    <img src="https://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                                </div>
                                <div class="col-sm-6 col-md-8">
                                    <h4><?php echo "".$jugador1->getNombre()." ".$jugador1->getApellidos(); ?></h4>
                                    <p>
                                        <br />
                                        
                                        <i class="glyphicon glyphicon-envelope"></i>Tipo de juego: <?php echo " ".$jugador1->getTipo(); ?>
                                        <br /><br />
                                        <i class="glyphicon glyphicon-globe"></i>Edad: <?php echo " ".$jugador1->getEdad(); ?>
                                        <br /> <br />
                                    <!-- Botón -->
                                    <button type="button" class="btn btn-danger" onclick="window.location.href='index.php'">Cerrar sesión</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>