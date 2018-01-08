<?php
/**
 * Created by PhpStorm.
 * User: andre.pukk
 * Date: 8.01.2018
 * Time: 13:27
 */
/*
 * Koosta funktisoon, mis väljastab vormi
 * Vormi ülesandeks on sisestada andmed raamatu kohta:
 * vormi väljade nimedeks kasuta:
 * 'title', 'author', 'print', 'status'
 * Vormitöötlus hakkab töötama vormi välja kutsuvas failis
 */
function raamatuVorm(){
    echo '
        <form action="'.$_SERVER['PHP_SELF'].'" method="post">
            Pealkiri: <input type="text" name="title"><br />
            Autor: <input type="text" name="author"><br />
            Trükikoda: <input type="text" name="print"><br />
            Seisund: <input type="text" name="status"><br />
            <input type="submit" value="Salvesta!"> 
        </form>
    ';
}
/*
 * Koostame funktsiooni, mis salvestab vormiandmed faili
 * */
function salvestaRaamat($raamat, $failinimi){
    if(file_exists($failinimi) and is_file($failinimi) and is_writable($failinimi)){
        $fail = fopen($failinimi, 'a') or die('Probleem faili avamisega');
        foreach ($raamat as $element){
            fwrite($fail, $element."\n");
        }
        fwrite($fail, "----\n");
        fclose($fail);
        echo 'Andmed on sisestatud<br />';
    } else {
        echo 'Probleem failiga '.$failinimi.'<br />';
    }
}