<?php
/**
 * Created by PhpStorm.
 * User: andre.pukk
 * Date: 20.12.2017
 * Time: 12:02
 */
$numbers = array(1, 5, 2, 4, 2);
var_dump($numbers);
echo '<hr />';
echo '</pre>';
print_r($numbers);
echo '</pre>';

echo '<hr />';
for($i = 0; $i < count($numbers); $i++){
    echo '<b>'.$numbers[$i].'</b><br />';
}
echo '<hr />';
foreach ($numbers as $number){
    echo '<i>'.$number.'</i><br />';
}

//

$numbers[] = 6;
echo '<hr />';
foreach ($numbers as $number){
    echo '<i>'.$number.'</i><br />';
}

//

$numbers[0] = 7;
echo '<hr />';
foreach ($numbers as $number){
    echo '<i>'.$number.'</i><br />';
}