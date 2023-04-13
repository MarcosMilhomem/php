<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROGRAMA COMPRAS</title>
</head>
<body>
    <main>
        <?php
        function valorDaCompra(){
            $compra1 = 235;
            $compra2 = 122;
            $totalCompra = $compra1 + $compra2;
            return $totalCompra;
        }
        function valorFrete(){
            $precoKm = 0.2;
            $distancia = 50000;
            $totalFrete = $precoKm * $distancia;
            return $totalFrete;
        }
        function total(){
            $frete = valorFrete();
            $compras = valorDaCompra();
            $valorFinal = $frete + $compras;
          return $valorFinal;
        }
        echo "o total ficou " . total();
        ?>
    </main>
</body>
</html>