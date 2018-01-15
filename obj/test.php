<?php
/**
 * Created by PhpStorm.
 * User: andre.pukk
 * Date: 15.01.2018
 * Time: 8:58
 */
require_once 'text.php';

// Loome reaalse objekti tekst class abil

$myText = new text();
// Anname sõne muutujale väärtuse
$myText->string = 'Hello world!';

// Teostame test vaate antud objektist

echo '<pre>';
print_r($myText);
echo '</pre>';