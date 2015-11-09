<?php

class Jugador{
    
    //CONSTRUCTOR
    
    function Jugador($nombre, $apellidos, $edad){
        
        $this->$nombre = $nombre;
        $this->$apellidos = $apellidos;
        $this->$edad = $edad;
        
    }
    
    //GETTERS
    
    function getNombre(){
        return $this->$nombre;
    }
    
    function getApellidos(){
        return $this->$apellidos;
    }
    
    function getEdad(){
        return $this->$edad;
    }
    
    //SETTERS
    
    function setNombre($nombre){
        $this->$nombre = $nombre;
    }
    
    function setApellidos($apellidos){
        $this->$apellidos = $apellidos;
    }
    
    function setEdad($edad){
        $this->$edad = $edad;
    }
    
    //FUNCIONES
    
    
}


?>