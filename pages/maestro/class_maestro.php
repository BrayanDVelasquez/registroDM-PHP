<?php
error_reporting(0);
include('../others/poo/class_persona.php'); // clase abstracta
extract($_POST); 

class Maestro extends Persona {

    public function __construct ($nombre, $apellido, $cedula, $fecha, $genero, $institucion, $grado, $seccion, $turno, $numeroEstudiantes){

        parent::__construct($nombre, $apellido, $cedula, $fecha, $genero);

        $this -> institucion = $institucion;
        $this -> grado = $grado;
        $this -> seccion = $seccion;
        $this -> turno = $turno;
        $this -> numeroEstudiantes = $numeroEstudiantes;
    }

    public function mostrarInstitucion(){
        return $this -> institucion;
    }

    public function mostrarGrado(){
        return $this -> grado;
    }

    public function mostrarSeccion(){
        return $this -> seccion;
    }

    public function mostrarTurno(){
        return $this -> turno;
    }

    public function mostrarEstudiantesAsignados(){
        return $this -> numeroEstudiantes;
    }
}

$objetoMaestro = new Maestro(

    $nombre, 
    $apellido, 
    $cedula, 
    $fecha, 
    $genero, 
    $institucion, 
    $grado, 
    $seccion, 
    $turno, 
    $numeroEstudiantes

);

if($objetoMaestro -> mostrarGenero() == 'Masculino'){
    $genero = 'El maestro';
} else {
    $genero = 'La maestra';
}

?>