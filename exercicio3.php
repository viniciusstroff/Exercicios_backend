
<!-- c) Crie um programa que calcule e mostre os números primos entre 0 e 200, apresentando ao final a soma destes números;
 -->



<?php 

// --------------------------------- EXERCICIO C---------------------------------------

function verificaNumeroPrimo($inicio = 0, $fim = 1){
    $numerosPrimos = [];
    for($i=$inicio;$i<=$fim;$i++){
        $contador = 0; 
        for($j=1;$j<=$i;$j++){ 
              if($i % $j==0) $contador++;       
        }

        if($contador==2){
            $numerosPrimos[] = $i;
            echo "$i É numero Primo <br/>";
        }
    }
    return $numerosPrimos;
}


$numerosPrimos = verificaNumeroPrimo($inicio = 0,  $fim =200);
$elementos = join(" + ", $numerosPrimos);
$total = array_sum($numerosPrimos);

echo "$elementos = $total";

?>
