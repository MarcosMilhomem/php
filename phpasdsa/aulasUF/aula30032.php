<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ex 02. AULA 30/03</title>
</head>
<body>
    <?php 
    function dobro($valor)
    {
        $valor = 2 * $valor;
    }
    function duplica(&$valor)
    {
        $valor = 2 * $valor;
    }
    $valor = 5;
    dobro($valor);
    echo $valor . "<br>";
    duplica($valor);
    echo $valor;
    ?>
</body>
</html>