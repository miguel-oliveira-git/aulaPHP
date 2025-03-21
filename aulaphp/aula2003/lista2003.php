<?php 
echo"{$_POST["nome"]}";

echo "<br><br><br>";

var_dump(array_keys($_POST));

echo "<br><br><br>";
$meuArrayDeChaves = array_keys($_POST);
echo"{$meuArrayDeChaves[1]}";

echo"<br><br><br>";
var_dump($_POST["email"]);


?>