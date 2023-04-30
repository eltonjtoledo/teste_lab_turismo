<?php

/**
 * 4) Maior valor da lista
 * Neste desafio, você começará com uma matriz inicializada em zeros com índices começando em 1. 
 * Você receberá uma série de operações para executar em segmentos da lista. 
 * Cada operação consistirá em um índice inicial e final dentro do array e um número para adicionar a cada elemento dentro desse intervalo.
 */

function gerarMatriz($length, $arrayDados)
{
    $matriz = array();

    for ($i = 1; $i <= $length; $i++) {
        $matriz[$i] = 0;
    }

    foreach ($arrayDados as $key => $dados) {
        for ($x = $dados['a']; $x <= $dados['b']; $x++) {
            $matriz[$x] += $dados['v'];
        }
        // print_r($matriz); // Para conferencia dos valores
    }
    return max($matriz);
}
/**
 * Caso de teste 01
 * Resultado: 17
 */
print gerarMatriz(5, array(
    ['a' => 1, 'b' => 2, 'v' => 10],
    ['a' => 2, 'b' => 4, 'v' => 5],
    ['a' => 3, 'b' => 5, 'v' => 12]
)). "\n";

/**
 * Caso de teste 02
 * Resultado: 882
 */
print gerarMatriz(5, array(
    ['a' => 1, 'b' => 2, 'v' => 100],
    ['a' => 2, 'b' => 5, 'v' => 100],
    ['a' => 3, 'b' => 4, 'v' => 100]
)). "\n";

/**
 * Caso de teste 03
 * Resultado: 8628
 */
print gerarMatriz(40, array(
    ['a' =>29,'b'=>40, 'v'=>787],
    ['a' =>9,'b'=>26, 'v'=>219],
    ['a' =>21,'b'=>31, 'v'=>214],
    ['a' =>8,'b'=>22, 'v'=>719],
    ['a' =>15,'b'=>23, 'v'=>102],
    ['a' =>11,'b'=>24, 'v'=>83],
    ['a' =>14,'b'=>22, 'v'=>321],
    ['a' =>5,'b'=>22, 'v'=>300],
    ['a' =>11,'b'=>30, 'v'=>832],
    ['a' =>5,'b'=>25, 'v'=>29],
    ['a' =>16,'b'=>24, 'v'=>577],
    ['a' =>3,'b'=>10, 'v'=>905],
    ['a' =>15,'b'=>22, 'v'=>335],
    ['a' =>29,'b'=>35, 'v'=>254],
    ['a' =>9,'b'=>20, 'v'=>20],
    ['a' =>33,'b'=>34, 'v'=>351],
    ['a' =>30,'b'=>38, 'v'=>564],
    ['a' =>11,'b'=>31, 'v'=>969],
    ['a'=>3, 'b'=>32, 'v'=>11],
    ['a'=>29, 'b'=>35, 'v'=>267],
    ['a'=>4, 'b'=>24, 'v'=>531],
    ['a'=>1, 'b'=>38, 'v'=>892],
    ['a'=>12, 'b'=>18, 'v'=>825],
    ['a'=>25, 'b'=>32, 'v'=>99],
    ['a'=>3, 'b'=>39, 'v'=>107],
    ['a'=>12, 'b'=>37, 'v'=>131],
    ['a'=>3, 'b'=>26, 'v'=>640],
    ['a'=>8, 'b'=>39, 'v'=>483],
    ['a'=>8, 'b'=>11, 'v'=>194],
    ['a'=>12, 'b'=>37, 'v'=>502]
)). "\n";

/**
 * Caso de teste 04
 * Resultado: 6314
 */
print gerarMatriz(5, array(
    ['a'=>19, 'b'=>28, 'v'=>419],
    ['a'=>4, 'b'=>23, 'v'=>680],
    ['a'=>5, 'b'=>6, 'v'=>907],
    ['a'=>19, 'b'=>33, 'v'=>582],
    ['a'=>5, 'b'=>9, 'v'=>880],
    ['a'=>10, 'b'=>13, 'v'=>438],
    ['a'=>21, 'b'=>39, 'v'=>294],
    ['a'=>13, 'b'=>18, 'v'=>678],
    ['a'=>12, 'b'=>26, 'v'=>528],
    ['a'=>15, 'b'=>30, 'v'=>261],
    ['a'=>8, 'b'=>9, 'v'=>48],
    ['a'=>21, 'b'=>23, 'v'=>131],
    ['a'=>20, 'b'=>21, 'v'=>7],
    ['a'=>13, 'b'=>40, 'v'=>65],
    ['a'=>13, 'b'=>23, 'v'=>901],
    ['a'=>15, 'b'=>15, 'v'=>914],
    ['a'=>14, 'b'=>35, 'v'=>704],
    ['a'=>20, 'b'=>39, 'v'=>522],
    ['a'=>10, 'b'=>18, 'v'=>379],
    ['a'=>16, 'b'=>27, 'v'=>8],
    ['a'=>25, 'b'=>40, 'v'=>536],
    ['a'=>5, 'b'=>9, 'v'=>190],
    ['a'=>17, 'b'=>20, 'v'=>809],
    ['a'=>8, 'b'=>20, 'v'=>453],
    ['a'=>22, 'b'=>37, 'v'=>298],
    ['a'=>19, 'b'=>37, 'v'=>112],
    ['a'=>2, 'b'=>5, 'v'=>186],
    ['a'=>21, 'b'=>29, 'v'=>184],
    ['a'=>23, 'b'=>30, 'v'=>625],
    ['a'=>2, 'b'=>8, 'v'=>960]
)). "\n";




