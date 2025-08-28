<?php
    $aluno = ['nome' => 'João', 'idade' => 20, 'curso' => 'Engenharia de Software'];
    echo "Olá $aluno[nome], você tem $aluno[idade] anos e está cursando $aluno[curso].";
    $anoatual = date('Y');
    $anonascimento = $anoatual - $aluno['idade'];
    echo "<p>Você nasceu em $anonascimento.</p>";

    $dataAtual = date('d-m-Y');
    echo "<p>Data atual: $dataAtual.</p>";
?>