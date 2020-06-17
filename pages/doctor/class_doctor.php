<?php
error_reporting(0);
include('../others/poo/class_persona.php'); // clase abstracta
extract($_POST); 

class Doctor extends Persona {

    public function __construct ($nombre, $apellido, $cedula, $fecha, $genero, $lugarDondeAtiende, $turno, $promedioHoras){

        parent::__construct($nombre, $apellido, $cedula, $fecha, $genero, $lugarDondeAtiende, $promedioHoras);

        $this -> lugarDondeAtiende = $lugarDondeAtiende;
        $this -> turno = $turno;
        $this -> promedioHoras = $promedioHoras;
    }

    public function mostrarLugarDondeAtiende(){
        return $this -> lugarDondeAtiende;
    }

    public function mostrarTurno(){
        return $this -> turno;
    }

    public function mostrarPromedioHorasDia(){
        return $this -> promedioHoras;
    }

}

$objetoDoctor = new Doctor(
    $nombre, 
    $apellido, 
    $cedula, 
    $fecha, 
    $genero, 
    $lugarDondeAtiende, 
    $turno, 
    $promedioHoras
);

if($objetoDoctor -> mostrarGenero() == 'Masculino'){
    $genero = 'El doctor';
} else {
    $genero = 'La doctora';
}

?>