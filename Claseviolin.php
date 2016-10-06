<?php
/**
 * Clase creada por Roberto Jesús Sánchez Camacho
 * clase ejemplo de definicion
 */
class ClaseViolin
{

  // Declaración de una propiedad
  public $color = 'marron';
  public $tamaño = "4/4";
  public $precio = 1000;
  public $tensores = 1;

  // Setters
  public function setcolor($cambiarColor){
    $this->color = $cambiarcolor;
  }

  public function setTamanyo($CambiarTamanyo){
    $this->tamaño = $CambiarTamanyo;
  }

  public function setPrecio($CambiarPrecio){
    $this->Precio =$CambiarPrecio;
  }

  public function setTensores($CambiarTensores){
    $this->Precio =$CambiarTensores;
  }

  //Getters
  public function getColor() {
      return $this->color;
  }
  public function getTamanyo() {
      return $this->tamaño;
  }
  public function getPrecio() {
      return $this->tamaño;
  }
  public function getTensores() {
      return $this->tamaño;
  }

}

?>
