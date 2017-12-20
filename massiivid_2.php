<?php
/**
 * Created by PhpStorm.
 * User: andre.pukk
 * Date: 20.12.2017
 * Time: 14:19
 */

// Ülesanne 1

function looMassiiv($elementideArv){
    $massiiv = array();
    while($elementideArv > 0){
        $massiiv[] = rand(100, 999);
        $elementideArv--;
    }
    return $massiiv;
}

function valjastaMassiiv($a){
    foreach ($a as $e){
        echo'<b>'.$e.'</b><br>';
    }
}

$de = looMassiiv(12);
valjastaMassiiv($de);

echo '<hr>';

// Ülesanne 2

$mas = array(10, 13, 99, 14, 15, 16);
valjastaMassiiv($mas);
echo '<hr>';
$suurim = array_search(max($mas), $mas);
$vahim = array_search(min($mas), $mas);
echo $vahim.'<br>';
echo $suurim.'<br>';
echo min($mas).'<br>';
echo max($mas).'<br>';
echo '<hr>';
function vahetaMinMax(&$rida){
    $min = min($rida);
    $max = max($rida);
    for($i = 0; $i < count($rida); $i++){
        if ($rida[$i] == $min){
            $rida[$i] = $max;
        } else if ($rida[$i] == $max){
            $rida[$i] = $min;
        }
    }
}
vahetaMinMax($mas);
valjastaMassiiv($mas);
echo '<hr>';

$kmasssiiv = array(1, 0, 6, 0, 0, 3, 5);
function elementideKorrutis($rida){
    $uusrida = array();
    for($i = 0; $i < (count($rida)); $i++){
        if ($i % 2 == 0 and $rida[$i] > 0){
            $uusrida[] = $rida[$i];
        }
    }
    echo 'Massiiv on ';
    for($i = 0; $i < (count($rida) - 1); $i++){
        echo $rida[$i].', ';
    }
    echo end($rida).'.';
    echo'<br>Tulemus: ';
    for($i = 0; $i < (count($uusrida) - 1); $i++){
        echo $uusrida[$i].' * ';
    }
    echo end($uusrida).' = '.array_product($uusrida).'.';
}
elementideKorrutis($kmasssiiv);
echo '<hr>';
$vmassiiv = array(1, 1, 1, 2, 2, 2, 2, 3);
function mitteDubleeri($rida){
    $valjasta =  "";
    foreach ($rida as $element){
        if($valjasta != $element){
            $valjasta = $element;
            echo $element.', ';
        }
    }
}
mitteDubleeri($vmassiiv);