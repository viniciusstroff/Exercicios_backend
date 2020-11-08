
<!-- e) Crie um programa que informe quantas letras, digitos e palavras estão presentes na string 
"Na preparação para a final da Copa do Mundo, a França está em ritmo de recuperação física depois da semifinal 
contra a Bélgica. Nesta quinta-feira (12/julho/2018), 5 jogadores sequer foram a campo".;
 -->


<?php 

// --------------------------------- EXERCICIO E---------------------------------------

function contadorDeLetas($string) {
    $apenasLetras = preg_replace('/[^a-zA-Záàâãéèêíïóôõöúçñ]+/', '', $string);
    return strlen($apenasLetras);
}

$string = "Na preparação para a final da Copa do Mundo, a França está em ritmo de recuperação física depois da semifinal contra a Bélgica. Nesta quinta-feira (12/julho/2018), 5 jogadores sequer foram a campo";

$digitos = strlen($string);
$palavras = str_word_count($string);
$letras = contadorDeLetas($string);

echo "Na string: <br> 
'$string'
<br> 
existem <strong>$digitos</strong> digitos, <br>
<strong>$palavras</strong> palavras, <br>
<strong>$letras</strong> letras";


?>
