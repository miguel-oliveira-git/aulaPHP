<?php 
$arquivo= "usuario.json";
$json= file_get_contents($arquivo);
$lista=json_decode($json,true);
echo"<pre>";
print_r($lista);
echo "<pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Usuario</title>
</head>
<body>
    <h1>Lista de Usuário</h1>
    <table border="1" cellpadding="5" cellpaceing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Idade</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            echo"{$lista["id"]}";
            ?>
            <tr>
                <td> <?php echo"{$lista["id"]}"; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>