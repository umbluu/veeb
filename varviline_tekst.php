<?php
/**
 * Created by PhpStorm.
 * User: andre.pukk
 * Date: 13.12.2017
 * Time: 14:55
 */
for ($rida = 1; $rida <= 5; $rida++){
    $varv = '#';
    for($kord = 1; $kord <= 6; $kord++){
        $juhuarv = rand(0, 19);
        $varv = $varv.$juhuarv;
      //  echo $varv.'<br />';
    }
    echo '<font color="'.$varv.'">Värviline tekst</font><br />';
}
sss
