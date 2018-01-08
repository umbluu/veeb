<?php
/**
 * Created by PhpStorm.
 * User: andre.pukk
 * Date: 8.01.2018
 * Time: 15:06
 */
date_default_timezone_set('Europe/Helsinki');
echo time().'<br />';
echo mktime(14, 56, 00, 1, 09, 2018).'<br />';
$tana = date("H:i");
echo $tana.'<br />';