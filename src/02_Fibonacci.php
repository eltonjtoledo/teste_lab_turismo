<?php
/**
 * 2) Fibonacci
 * Os números de Fibonacci são uma sequência de números onde cada número após os dois primeiros é uma soma dos dois anteriores.
 */



function gerar_sequencia($legth){
    $sequencia = array(0,1);

    for ($i=2; $i < $legth; $i++) {
        $count = count($sequencia);
        $valorAnteriorA = $sequencia[$count - 2];
        $valorAnteriorB = $sequencia[$count - 1];

        $proximoValor = $valorAnteriorA + $valorAnteriorB;
        array_push($sequencia, $proximoValor);
    }
    $sequencia = array_slice($sequencia, 0, $legth);
    return implode(',', $sequencia);
}

/** 
 * Caso de teste 1
 * Resultado: "0,1,1,2"
*/
var_dump(gerar_sequencia(4));

/** 
 * Caso de teste 2
 * Resultado: "0,1,1,2,3"
*/
var_dump(gerar_sequencia(5));

/** 
 * Caso de teste 3
 * Resultado: "0,1,1,2,3,5,8,13"
*/
var_dump(gerar_sequencia(8));

/** 
 * Caso de teste 4
 * Resultado: "0"
*/
var_dump(gerar_sequencia(1));

/** 
 * Caso de teste 5
 * Resultado: "0,1,1"
*/
var_dump(gerar_sequencia(3));

/** 
 * Caso de teste 6
 * Resultado: "0,1,1,2,3,5,8,13,21,34"
*/
var_dump(gerar_sequencia(10));