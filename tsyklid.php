<?php
/**
 * Created by PhpStorm.
 * User: andre.pukk
 * Date: 13.12.2017
 * Time: 14:13
 */
for($kord = 1; $kord <= 10; $kord++){
    if($kord % 2 ==0){
        $varv = 'red';
//        continue;
        break;
    } else {
        $varv = 'blue';
    }
//  Kuna värvi defineerimine on juba kirjas
//    if($varv == 'red'){
//        continue;
//    }
    echo '<font color="'.$varv.'">'.$kord.'</font><br />';
}