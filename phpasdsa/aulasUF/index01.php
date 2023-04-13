<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function maiusculo($string)
    {
        $string = strtoupper($string);
        $string = str_replace("á","Á",$string);
        $string = str_replace("é","É",$string);
        $string = str_replace("í","Í",$string);
        $string = str_replace("ó","Ó",$string);
        $string = str_replace("ú","Ú",$string);
        $string = str_replace("ã","Ã",$string);
        $string = str_replace("ê","Ê",$string);
        $string = str_replace("ô","Ô",$string);
        $string = str_replace("î","Î",$string);
        $string = str_replace("Û","U",$string);
        $string = str_replace("â","Â",$string);
        $string = str_replace("õ","Õ",$string);
        $string = str_replace("à","À",$string);
    }
    ?>
</body>
</html>