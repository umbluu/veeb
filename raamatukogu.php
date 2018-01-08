<?php
/**
 * Created by PhpStorm.
 * User: andre.pukk
 * Date: 8.01.2018
 * Time: 13:26
 */
require_once 'fnk.php';
raamatuVorm();
$raamat = array(
    'title' => 'Peppa Goes To London',
    'author' => 'Ladybird',
    'print' => 'Penguin',
    'status' => 'valjas'
);
salvestaRaamat($raamat, 'raamatud.txt');
loeAndmed('raamatud.txt');