<?php



if($_SERVER["REQUEST_METHOD"]== "POST" ){

    $nome=!isset($_POST["nome"]) || $_POST["nome"] != "" ? $_POST["nome"] : "nao tem nome";
    $email=!isset($_POST["email"]) || $_POST["email"] != "" ? $_POST["email"] : "nao tem email";
    $msg=!isset($_POST["mensagem"]) || $_POST["mensagem"] != "" ? $_POST["mensagem"] : "nao tem mensagem";

    $dadosform= [
        "nome" => $nome,
        "mensagem" => $msg,
        "email" => $email
    ];
    $nomedoarqv="./db/cadastrojson";

    if(file_exists($nomedoarqv)){
        $conteudoAtual=file_get_contents(filename:$nomedoarqv);

        $jsonDoarqvExitente=json_decode(json:$conteudoAtual, associative: true);
    }

    $jsonDoarqvExitente[]=$dadosform;












    $jsonDadosFoem=json_encode(value:$dadosform, flags: JSON_PRETTY_PRINT);
   


    file_put_contents(filename:$nomedoarqv, data: $dadosform);

    
    echo "<h1> o nome digitado foi $nome <h1>";
    echo "<h1> o nome digitado foi $email <h1>";
    echo "<h1> o nome digitado foi $mensagem <h1>";
   
}

else{
    echo('acesso nao permitido');
}

echo "<br><br><br>";
var_dump($_POST);
var_dump($_GET);

//var_dump($_REQUEST["GET"]);
?>
