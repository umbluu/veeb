<?php
/**
 * Created by PhpStorm.
 * User: andre.pukk
 * Date: 15.01.2018
 * Time: 12:32
 */
require_once 'table.php';
// Loome tabel kirjelduse järgi tabeli objekti
$myTable = new table(array('a', 'b', 'c'));
// väljastame tabel test kujul
echo '<pre>';
print_r($myTable);
echo '</pre>';