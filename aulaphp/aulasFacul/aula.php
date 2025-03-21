<?php 
function verificarCapacidadeFinanceira($salParam, $parParam){

    if($parParam<= $salParam*0.3){
        print("Para um salário de $salParam é possível fazer o empréstimo com parecelas de $parParam");
        $salario=$salParam-$parParam;
    }
    else{
        echo"Não é possível realizar um empréstimo com parcelas de $parParam, com um salário de $salParam";
        $salario=$salParam-$parParam;
}
}
$salario= 1000;
$taxa= 0.3;
$parcela= 299;
function verificarCapacidade($salParam, $parParam){
    $salParam= 1200;
    $parParam= 500;
    print_r("Seu salário já descontado será $salParam");
}
phpinfo();
?>