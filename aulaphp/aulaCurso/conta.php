<?php 
class ContaBancaria {
// Atributos     
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status; 
    // Método Construtor
    public function __construct(){
        $saldo= 0;
        $status= false;
    }

    // Métodos sets e gets
    public function getnumConta() { 
        return $this->numConta;
    }
    public function setnumConta($nc) {
        $this->numConta = $nc;
    }
    public function getTipo(){
        return $this->tipo;
    }
    public function setTipo($t){
        $this->tipo = $t;
    }
    public function getDono(){
        return $this-> dono;
    }
    public function setDono($d){
        $this-> dono= $d;
    }
    public function getSaldo(){
        return $this->saldo;
    }
    public function setSaldo($sld){
        $this->saldo = $sld;
    }
    public function getStatus(){
        return $this-> status; 
    }
    public function setStatus ($stts){
        $this->status= $stts;
    }
    // Métodos 
    public function abrirConta($t){
        $tipo= $t;
        $status=true;
            if ($t= "CC"){
                $saldo= 50;
        }else{
            $saldo= 150;
        }
    }
    
    public function fecharConta(){
        if ($this->saldo>0)
        {
            echo "Ainda possui dinheiro, não é possível fechar a conta.";
        }
        elseif ($this->saldo<0)
        {
            echo "Conta em débito";
        }
        else{
            $sttus=false;
        }
    }
    public function depositar($v){
        if ($this->status== true){
            $this ->setSaldo($this->getSaldo()+$v);
            print("O valor de R$ {$v} foi depositado");
        }
        else{
            print("Conta fechada");
        }
    }
    public function sacar ($v){
        if($this->getStatus()){
            if($this->getSaldo() >= $v){
                $this->setSaldo ($this->getSaldo()-$v);
                print("Valor de R$ {$v} foi sacado");
            }else{
                print("Saldo insuficiente");
            }
        }
        else{
            print("Conta fechada");
        }
       
    }   
    public function pagarMensal(){
        if ($this->tipo== "CC"){
            $v= 12;
        }elseif ($this->tipo== "CP"){
            $v= 20;
        }
        if ($this->getStatus()){
                $this->setSaldo($this->getSaldo()-$v);        
    }else{
        echo "Problemas com a conta";
}
    }
}
$conta1= new ContaBancaria ();
$conta2 = new ContaBancaria ();
$conta1->abrirConta("CC");
$conta1->setDono("Jubileu");
$conta1 ->setnumConta(1);
$conta1->setStatus(stts:true);
$conta2->abrirConta("CP");
$conta2->setDono("Creuza");
$conta2->setnumConta("2");
$conta2->setStatus(stts:true);
$conta1->depositar(7000);
$conta1->sacar(2000);
$conta1->sacar(5400);
$conta2->depositar(500);
print_r($conta1);
print_r($conta2);

?>      