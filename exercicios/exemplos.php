<?php
echo "<br> exemplo 01";
// Criação de um array utilizando array()
$array = array(1, 2, 3, 4);

// Criação de um array utilizando []
$array2 = [1, 2, 3, 4];

// Percorre o array e mostra os valores
for ($i = 0; $i < count($array); $i++) {
    echo "<br>" . $array[$i];
}


echo "<br><br> exemplo 02 <br>";
// array_push adiciona um ou mais elementos no FINAL do array
array_push($array, 5, 6);

for ($i = 0; $i < count($array); $i++) {
    echo "<br>" . $array[$i];
}


echo "<br><br> exemplo 03 <br>";
// array_pop remove o ÚLTIMO elemento do array
$Resultado = array_pop($array);
for ($i = 0; $i < count($array); $i++) {
    echo "<br>" . $array[$i];
}


echo "<br><br> exemplo 04 <br>";
// array_unshift adiciona um ou mais elementos no INÍCIO do array
array_unshift($array, 0);
for ($i = 0; $i < count($array); $i++) {
    echo "<br>" . $array[$i];
}


echo "<br><br> exemplo 05 <br>";
// array_shift remove o PRIMEIRO elemento do array
$primeiro = array_shift($array);
for ($i = 0; $i < count($array); $i++) {
    echo "<br>" . $array[$i];
}


echo "<br><br> exemplo 06 <br>";
// array_merge junta/combina dois ou mais arrays
$array2 = [6, 7, 8, 9];

$resultado = array_merge($array, $array2);
for ($i = 0; $i < count($resultado); $i++) {
    echo "<br>" . $resultado[$i];
}


echo "<br><br> exemplo 07 <br>";
// array_slice extrai uma parte do array
// 3 = índice inicial
// 3 = quantidade de elementos que serão retirados
$retira = array_slice($resultado, 3, 3);
for ($i = 0; $i < count($retira); $i++) {
    echo "<br>" . $retira[$i];
}


echo "<br><br> exemplo 08 <br>";
// array_splice remove uma parte do array
// 2 = índice onde começa
// 2 = quantidade de elementos removidos
array_splice($resultado, 2, 2);
for ($i = 0; $i < count($resultado); $i++) {
    echo "<br>" . $resultado[$i];
}


echo "<br><br> exemplo 09 <br>";
// sort organiza o array em ORDEM CRESCENTE
sort($resultado);
for ($i = 0; $i < count($resultado); $i++) {
    echo "<br>" . $resultado[$i];
}


echo "<br><br> exemplo 10 <br>";
// rsort organiza o array em ORDEM DECRESCENTE
rsort($resultado);
for ($i = 0; $i < count($resultado); $i++) {
    echo "<br>" . $resultado[$i];
}


echo "<br><br> exemplo 11 <br>";
// Criamos outro array para fazer a comparação
$array3 = [1, 3, 5, 7];

// array_diff mostra os valores que estão no PRIMEIRO array
// mas NÃO estão no segundo array
$diferenca = array_diff($resultado, $array3);
for ($i = 0; $i < count($diferenca); $i++) {
    echo "<br>" . $diferenca[$i];
}
?>