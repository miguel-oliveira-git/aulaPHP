<?php 
$nome = '';

//print("nome do usuário = $nome");
if (isset( $_GET["nomeUser"] )){
    $nome = $_GET["nomeUser"];
}

$nome= isset($_GET['nomeUser']) ? $_GET['nomeUser'] :'VAZIO';
$email= isset($_GET['emailUser']) ? $_GET['emaiUser'] :'VAZIO';
$idade= isset($_GET['idadeUser']) ? $_GET['idadeUser'] :'VAZIO';

$userArray= ["id"=>1,
            "nome"=> $nome,
             "email"=> $email,
             "idade"=> $idade,
             "origem"=> "aula de 20-03"
];

//print("nome do usuário = $nome<br>");
//print("email do usuário $email<br>");
//print("Idade do usuário: $idade");

//var_dump( $userArray );
print("<br><br><br>,br>");
//var_dump($userArray);
echo'<pre>';
print_r( $userArray, true );

$arquivo = "usuario.json";
file_put_contents($arquivo, json_encode($userArray), JSON_PRETTY_PRINT);
header("Location: lista.php");
exit();

?>