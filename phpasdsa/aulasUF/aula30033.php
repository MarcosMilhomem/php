<?php 
class Loja
{
    var $itens;
    function adiciona ($codigo , $quantidade){
        if(isset($this->itens[$codigo]))
        $ithis->itens[$codigo] 0+ = $quantiadade;
        else{
            $this->itens[$codigo] = $quantidade;
        }
        else{
            return false;
        }
    }
}
$estoque = newLoja;
$estoque->adicional("bermuna",2);
$estoque->adicional("camiseta",3);
echo "A loja já possui " . $estoque->itens["bermuda"] . "bermuda . <br>";
echo "A loja já possui " . $estoque->itens["camisetas"] . "camisetas . <br>";
?>