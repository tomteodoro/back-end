<?php
    $valor1 = $_GET['valor1'];
    $valor2 = $_GET['valor2'];
    $sinal = $_GET['sinal'];
    $resultado = $valor1.$sinal.$valor2;
    
    if ($sinal == "-") {
        echo $valor1 - $valor2;
    }

?>