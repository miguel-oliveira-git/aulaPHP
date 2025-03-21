<?php 
class Caneta{
    public $modelo;
    private $ponta;
    public function __construct($m, $p){
        $this-> modelo = $m;
        $this-> ponta = $p;
        
    }
    public function getModelo (){
        return $this->modelo;
    }
    public function setModelo ($m) {
        $this->modelo = $m;
    }
    public function getPonta (){
        return $this->ponta;
    }
    public function setPonta ($p) {
        $this->ponta = $p;  
    }
    }
    $c1= new Caneta(m: "Faber Castel", p: 0.7);
    $c2= new Caneta(m:"Bic", p:0.5);
    $c3= new Caneta(m:"Bic", p:1.0);
    print_r($c1);
    print_r($c2);
    

?>