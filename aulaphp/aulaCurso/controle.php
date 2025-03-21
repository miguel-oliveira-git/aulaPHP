<?php 
interface Controlador {
  public function ligar ();
  public function desligar ();
  public function abrirMenu ();
  public function fecharMenu ();
  public function maisVol ();
  public function menosVol ();
  public function ligarMudo ();
  public function desligarMudo ();
  public function play ();
  public function pause ();
  
}
class Controle  {
  private $volume;
  private $ligado;
  private $tocando;  
  public function __construct (){
    $this->volume = 50;
    $this->ligado = false;
    $this->tocando = false;
  }
  public function getvolume(){
    return $this->volume;
  }
  public function setvolume($vol){
    $this->volume = $vol;
  }
  public function getLigado(){
    return $this->ligado;
  }
  public function setLigado($on){
    $this->ligado = $on;
  }
  public function getTocando (){    
    return $this->tocando;
  }
  public function setTocando($t){
    $this->tocando = $t;
  }

  public function desligar(){
    $this->setLigado(false);
  }
  public function ligar(){
    $this->setLigado(true);
  }
  public function abrirMenu(){
    echo "<br> Está ligado?". ($this->getLigado() ?"SIM":"NÃO");
    echo "<br> Está tocando?". ($this->getTocando() ?"SIM":"NÃO");
    echo"<br> Volume: ". $this->getvolume();
    for ($i=0; $i<=$this->getvolume();$i+=10 ){
      echo "|";
    }
    echo "<br>";
  }
  public function fecharMenu(){
    echo "<br>Fechando Menu...";
  } 
  public function maisVol(){
    if($this->getLigado()){
      $this->setVolume($this->getVolume()+1);

    }
  }   
  public function menosVol(){
    if($this->getLigado()){
      $this->setVolume($this->getVolume()- 1);
    }
  }
  public function ligarMudo(){
    if($this->getLigado() && $this->getVolume()>0){
      $this->setVolume(0);
    }
  }
  public function desligarMudo(){
    if($this->getLigado() && $this->getVolume()== 0){
      $this->setVolume(50);
    }
  }
  public function play(){
    if($this->getLigado() && !($this->getTocando())){
      $this->setTocando(true);
    }
  }
  public function pause(){
  if($this->getLigado() && !($this->getTocando())){
      $this->setTocando(false);
    }
  }
}
$c1= new Controle();
$c1-> ligar();
$c1->play();
$c1-> maisVol();
$c1->abrirMenu();
print_r($c1);

?>