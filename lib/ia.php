<?php
/**
 * Clase creada por Roberto Sánchcez Camacho
 * clase Inteligencia artificial
 */
class ia
{

  // Declaración de una propiedad
  public $columna=1;
  public $fila=1;

    // Declaración de GETTERS
  public function getcolumna() {
    return $this->columna;
  }

  public function getfila() {
    return $this->fila;
  }

  // Declaración de SETTERS

  public function setcolumna($col){
    $this->columna = $col;
  }
  public function setfila($fil){
    $this->fila = $fil;
  }

  //Movimiento de la nave RAMDOM
  public function randompos() {
	$this->columna=rand(0,3);

	$this->fila=rand(0,3);
  }


}

?>
