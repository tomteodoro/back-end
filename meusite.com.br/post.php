<?php
    $numero = $_POST['numero'];

    function par_impar($numero){
        if ($numero % 2 == 0){
            return "par";
        } else {
            return "ímpar";
        }
    }
    echo "O número $numero é " . par_impar($numero);
    echo "<p><a href='par_impar.html'>Voltar</a></p>";
?>