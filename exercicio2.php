
<!-- b) Preencha uma matriz do tipo float de 5 colunas e 4 linhas com valores aleatórios entre 10 e 30. 
Em seguida descubra e apresente o maior e o menor valor presente nesta matriz. -->



<?php 

// --------------------------------- EXERCICIO B---------------------------------------

function rand_float($inicio = 0, $fim= 1, $mul = 1000000){
    if($inicio > $fim) return false;

    return mt_rand($inicio * $mul, $fim * $mul)/$mul;
}

function criarMatriz($quantidadeColunas = 5, $quantidadeLinhas = 4){
    $matriz = [];

    for($index = 0; $index < $quantidadeColunas; $index++){
        for($index2 = 0; $index2 < $quantidadeLinhas; $index2++){
             $matriz[$index][$index2] = rand_float(10, 30);
        }
    }
    return $matriz;
}

function verificaMaiorEhMenorValorMatriz($matriz){
    $maximo = [];
    $minimo = [];
    foreach($matriz as $key => $value){
        $maximo[$key] = max($value);
        $minimo[$key] = min($value);
    }

    return ['maior' =>  max($maximo), 'menor' =>  min($minimo)];
}

$matriz = criarMatriz($quantidadeColunas = 5,  $quantidadeLinhas= 4);

$valoresMatriz = verificaMaiorEhMenorValorMatriz($matriz);

echo "Maior valor: {$valoresMatriz['maior']} <br>";
echo "Menor valor: {$valoresMatriz['menor']}";


var_dump($matriz, $valoresMatriz);exit;




?>
