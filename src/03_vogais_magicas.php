<?php
/**
 * 3) Vogais Mágicas
 * Nós definimos uma subsequência mágica para ser uma sequência de letras dentro de uma string que contém 
 * todas as cinco vogais em ordem: a, e, i, o, u. Pode haver qualquer número de ocorrências de cada vogal, mas elas 
 * devem estar nessa ordem.
 * 
 * OBS. os valores não coincidem com os apresentados no arquivo PDF, mas as regras aplicadas parecem corretas
 */
function retornaComprimento($stringBase)
{
    $base = str_split($stringBase);
    $magicas = array();
    foreach($base as $valor){
        if(empty($magicas)){
            array_push($magicas, $valor);
        }elseif ($magicas[count($magicas) -1] <= $valor) {
            array_push($magicas, $valor);
        }
    }

    // print_r($magicas); // para coferencia dos valores

    return count($magicas);
}

/**
 * Caso de teste 01
 * Resultado: 10
 */
echo retornaComprimento('aeiaaioooaauuaeiou') . "\n";

/**
 * Caso de teste 02
 * Resultado: 7
 */
echo retornaComprimento('aeiaaioooaa') . "\n";

/**
 * Caso de teste 03
 * Resultado: 18
 */
echo retornaComprimento('uioieeeaouiiuaeeuuiuuauuauaeaeuauaeaaiuoiouaeuiuuoooaeeaioeieoeooaeuooae') . "\n";

/**
 * Caso de teste 04
 * Resultado: 63
 */
echo retornaComprimento('iaaieeeoaueuaaaaieaooiiuiaueeoauiueuaeiaouiueoouaeeioeieoeeiiiouiaioiaeeaaaeaouiioiueuoieeoeoiuuuouiaoea
aeeeiueuiueiaieuoueoeooiuoooiooouuuoiuoeiuaouoeaaaiaeueaiaeouuaeioeoaeeuuaeouiauaiaoioueeiauuieouoe
uoiiooauoeaoieuieiaooaaieuoauueoeueeauuaaueeeeeoooouueoiaauooioioaeiiuaiueeoaeiuiaouieiueuae') . "\n";

/**
 * Caso de teste 05
 * Resultado: 174
 */
echo retornaComprimento('ioeueooeuieoaioeoooiioieueoaiieaeaoeioiiaueueiououeiueeaaueeueaeoaaaouoeoieouaauooeuuoeauuaauaeoee
uiueeeuiieooeuaooeiaeueaaaaiooeaoiiiaaaooeiioaiiieieauaoeuiiueuioouuaoaioeiaiaaaaoeeaiuiaeoiiuauiiaeiuuaoa
eaaaaeoeueieoaaaooueioaauieieouoeouieaueuuaiiueoouioueuaaauaoeueuoouieuuouuoueoaaeuuouueieuouiooa
iuaoeuaeiaueuuieeiuaaeuiuuiuoiaiaeauuuaeeuuuuoieoieuaoiiuoeiaeaeeauoueaiuooiaoaiuoouoeeueeuaoeueiaiioi
ouueeaaoeoeauouuieeoaoioauieeeieeaaiuiaaeiaeueuouuaoaoiiaoeoaoeuieeouiiiiauauueaeouaeeeaoeaaaeouuue
oeoiueeoeiouaoeaaeeoaeaiiuouoaaeiuaiaeueuauaoauueuoeueueauuuueeeeuaouaaueaiouoeuooeiouoiiiueauaua
euaauuoeuoaeeouoouoeeeoieoaouiaaioiuoeuaaouuiioieoiiaueueuieouaiioeuaeoeieaoeiuooueeoeuueueioaoaauo
ooiiueueooeuouauuaiuiaoieeeeoouoeiaaaeieiooeouioeuooeeiauouueiuieaeaieeooaoeiuu') . "\n";