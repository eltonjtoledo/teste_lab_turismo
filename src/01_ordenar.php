<?php
/**
 * 1) Você consegue ordenar? 
 * Um array de inteiros $arr, de tamanho $n é definido as [a[0], a[1], ..., a[n-1]]. 
 * Será fornecido um array de inteiros para ordenar. 
 * A ordenação primeiro precisa ser pela frequência de ocorrência, então por valor.
 */

function Ordenar(array $arr): array
{
    sort($arr);
    $counts = array_count_values($arr);
    asort($counts);
    $ordenados = array();
    foreach($counts as $key => $qtd){
        $ordenados = array_merge($ordenados, array_filter($arr, function($value)  use ($key){
            return $value == $key;
        })); 
    }

    return $ordenados;
}

print_r(Ordenar(array(3, 1, 2, 2, 4)));
print_r(Ordenar(array(8, 5, 5, 5, 5, 1, 1, 1, 4, 4)));
print_r(Ordenar(array(1, 2, 3, 7, 1, 8, 2)));