<?php
/**
 * Created by PhpStorm.
 * User: andre.pukk
 * Date: 15.01.2018
 * Time: 12:32
 */
require_once 'table.php';
// loome tabel kirjelduse järgi tabeli objekt
$minuTabel = new tabel(array('a', 'b', 'c'));
// lisame tabeli read
$minuTabel->lisaRida(array(1, 2, 3));
$minuTabel->lisaRida(array(4, 5, 6));
$minuTabel->lisaReaKirjeldusega(array('c'=>7, 'a'=>8, 'b'=>9));
// väljastame tabel test kujul
echo '<pre>';
print_r($minuTabel);
echo '</pre>';
$minuTabel->prindiTabel();
require_once 'htmlTabel.php';
// loome tabel kirjelduse järgi tabeli objekt
$htmlTabel = new htmlTabel(array('a', 'b', 'c'), '#FF0000');
// lisame tabeli read
$htmlTabel->lisaRida(array(1, 2, 3));
$htmlTabel->lisaRida(array(4, 5, 6));
$htmlTabel->lisaReaKirjeldusega(array('c'=>7, 'a'=>8, 'b'=>9));
// väljastame tabel test kujul
echo '<pre>';
print_r($htmlTabel);
echo '</pre>';
$htmlTabel->prindiTabel();