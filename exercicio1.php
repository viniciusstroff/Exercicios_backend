
<!-- A) Inicialize um vetor de 20 inteiros com valores sorteados entre 0 e 100; em seguida, some todos elementos deste vetor e apresente o resultado. -->



<?php 

// --------------------------------- EXERCICIO A---------------------------------------

function createArrayWithRandomValues($length = 20, $numberStart = 0, $numberEnd = 100){
    $array = [];
    for($index=0; $index < $length; $index++){
        $array[] = rand($numberStart, $numberEnd);
    }
    return $array;
}

$array = createArrayWithRandomValues(20);
$elements = join(' + ', $array);
$total = array_sum($array);

echo "$elements = $total";





?>
