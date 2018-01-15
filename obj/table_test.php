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
// lisame tabeli read
$myTable->addRow(array(1, 2, 3));
$myTable->addRow(array(4, 5, 6));
$myTable->addRow(array(7, 8, 9));
// väljastame tabel test kujul
echo '<pre>';
print_r($myTable);
echo '</pre>';
$myTable->printTable();