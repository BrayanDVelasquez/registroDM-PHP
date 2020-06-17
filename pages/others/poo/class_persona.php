<?php

abstract class ClaseAbstracta {

    public $nombre;
    public $apellido;
    public $cedula;

    abstract public function mostrarNombre();
    abstract public function mostrarApellido();
    abstract public function mostrarCedula();

}

class Persona extends ClaseAbstracta {

    public function __construct ($nombre, $apellido, $cedula, $fecha, $genero){
        $this -> nombre = $nombre;
        $this -> apellido = $apellido;
        $this -> cedula = $cedula;
        $this -> fecha = $fecha;
        $this -> genero = $genero;
    }

    public function mostrarNombre(){
        return $this -> nombre;
    }

    public function mostrarApellido(){
        return $this -> apellido;
    }

    public function mostrarCedula(){
        return $this -> cedula;
    }

    public function mostrarFecha(){
        return $this -> fecha;
    }

    public function mostrarGenero(){
        return $this -> genero;
    }

    public function mostrarEdad(){ // Calcular la edad
        $dia = date('d');
        $mes = date('m');
        $año = date('Y');

        $añonac=substr($this -> fecha, 0,4);
        $mesnac=substr($this -> fecha, 5,2);
        $dianac=substr($this -> fecha, 8,2);

        if ($mesnac>$mes) {
            $edad=($año-$añonac)-1;
        }
        elseif ($mes==$mesnac and $dianac>$dia) {
            $edad=($año-$añonac)-1;
        }
        else{
            $edad=$año-$añonac;
        }

        return $edad;
    }
}

?>