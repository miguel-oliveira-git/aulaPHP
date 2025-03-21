<?php
// Criando a classe e seus atributos.
class Lutador {
	private $nome;
	private $nacionalidade;
	private $idade;
	private $altura;
    private $peso;
	private $categoria;
	private $vitorias, $derrotas, $empates;
// Criando o método construtor.
	public function __construct($name, $na, $idd, $alt, $p, $vit, $d, $emp){
		$this->nome= $name;
		$this->nacionalidade= $na;
		$this->idade= $idd;
		$this->altura= $alt;
		$this->setPeso($p);
		$this->vitorias= $vit;
		$this->derrotas= $d;
		$this->empates= $emp;
		
	}
	// Criando os getters e os setters
	public function getNome(){
		return $this->nome;
	}
	public function setNome($name){
		$this->nome= $name;
	}
	
	public function getNacionalidade(){
		return $this->nacionalidade;
	}
	
	public function setNacionalidade($na){
		$this->nacionalidade=$na;
	}
	public function getIdade(){
		return $this->idade;
	}
	
	public function setIdade($idd){
		$this->idade= $idd;
	}
	
	public function getAltura(){
		return $this->altura;
	}
	public function setAltura($alt){
		$this->altura= $alt;
	}
	public function getPeso(){
		return $this->peso;
	}
	public function setPeso($p){
		$this->peso= $p;
		$this->setCategoria($p);
	}
	public function getCategoria(){
		return $this->categoria;
	}
	private function setCategoria($p){
		if ($p<52.2){
			$this-> categoria="Categoria inválida";
		}
		else if($p<=70.3){
			$this-> categoria="Leve";
		}
		else if($p<=83.9){
			$this-> categoria="Médio";
		}
		else if($p<=120.2){
			$this-> categoria="Pesado";
		}
		else{
			$this-> categoria="Inválido";
		}
	}
	
	public function getVitorias(){
		return $this->vitorias;
	}
	public function setVitorias($vit){
		$this->vitorias= $vit;
	}
	public function getDerrotas(){
		return $this->derrotas;
	}
	public function setDerrotas($d){
		$this->derrotas= $d;
	}
	public function getEmpates(){
		return $this-> empates;
	}
	public function setEmpates($emp){
		$this-> empates= $emp;
	}
	
	public function apresentar(){
		print("Lutador: ".$this->getNome());
		print("Nacionalidade: ". $this->getNacionalidade());
		print("Idade: ". $this-> getIdade());
		print($this-> getAltura() . "metros");
		print("Pesando: ". $this->getPeso());
		print("Com". $this-> getVitorias(). "vitórias");
		print($this->getDerrotas(). "derrotas");
		print($this->getEmpates() . "empates");
	}
	
	public function status(){
		print($this->getNome());
		print("Da categorias dos pesos". $this->getCategoria());
		print($this->getVitorias(). "vitórias");
		print($this->getDerrotas(). "derrotas");
		print($this->getEmpates(). "empates");
	}
	
	public function ganharLuta(){
		$this->setVitorias($this->getVitorias()+1);
	}
	
	public function perderLuta(){
		$this->setDerrotas($this->getDerrotas()+1);
	}
	
	public function empatarLuta(){
		$this->setEmpates($this->getEmpates()+1);
	}
}
class Luta{
	private $desafiante;
	private $desafiado;
	private $rounds;
	private $aprovada;


	public function marcarLuta(){

	}
	public function lutar(){
	}
}

$l=[];
$l[0]= new Lutador("Pretty Boy","França", 31, 1.75, 68.9, 11, 3, 1);
$l[1]= new Lutador("PutsScript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
$l[2]= new Lutador("SnapShadow", "Estados Unidos", 35, 1.54, 80.9, 12, 2, 1);
$l[3]= new Lutador("DeadCode", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
$l[4]= new Lutador("Miguel", "Brasil", 20, 1.90, 70, 0,15,0);
$l[5]= new Lutador("Mateus", "Espanha", 25,1.87, 100,10,4,2);

$l[4]->apresentar();
$l[5]->status();
?>
