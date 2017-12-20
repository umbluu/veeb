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

/*
 * 1.
 * Koosta funktsioon nimega looMassiiv,
 * mis võtab parameetrina massiivi elementide
 * arvu ja loob juhuarvudest (täisarvud)
 * vahemikust 100-999 koosneva massiivi.
 * Loodud massiiv tuleb tagastada
 * põhiprogrammile ja kontrollida sisu
 * testväljastuse abil - näiteks print_r
 * */

function createArray($numberofElements){
    $numbers = array();
}

/*
 * 2.
 * Loo funktsioon nimega valjastaMassiiv,
 * mis võtab parameetrina massiivi ja
 * väljastab tema elemendid
 * üheveerulise tabeli kujul
 * Väljundi loomisel kasutada foreach
 * tsükkel
 * */
echo '<hr />';
echo 'Ülesanne 2';
echo '<br />';
$numbers = array(22, 23,  24, 25, 27);

foreach ($numbers as $value) {
    echo '<tr>';
    echo '<td>'.$value.'</td><br />';
    echo '</tr>';
}

/*
 * 3.
 * Loo funktsioon nimega vahetaMinMax, mis võtab
 * parameetrina täisarvude massiivi (testimises
 * võib kasutada looMassiiv funktsiooniga
 * genereeritud massiiv)
 * ja leiab kõige väiksema ja kõige suurema
 * elemendi antud massiivis ning vahetab nende asukohad.
 *
 * Kontrolli kas kohad on vahetatud kasutades
 * valjastaMassiiv funktsiooni
*/
/*
 * 4.
 * Loo funktsioon nimega elementideKorrutis, mis
 * võtab parameetrina täisarvude massiivi ja leiab
 * korrutis nendest arvudest, mis on suurem kui 0
 * ja mille indeksid on paarisarvud. Tulemus väljastatakse
 * antud funktsiooni abil kujul:
 *
 * Massiiv on 1, 0, 6, 0, 0, 3, 5
 * Tulemus: 1 * 6 * 5 = 30
*/
echo '<br />';
echo 'Ülesanne 4';
echo '<br />';
$numbers = array(1,6,5);

print_r(array_product($numbers));

/*
 * 5.
 * Töötluses kasutada massiiv
 * $massiiv = array(1, 1, 1, 2, 2, 2, 2, 3).
 * Loo funktsioon mitteDubleeri, mis võtab
 * parameetrina massiivi ja ei väljasta dubleeritud
 * elemendid. Ehk näidemassiivi puhul tuleb väljastada
 * ainult 1, 2, 3 - s.t. ilma dubleerimist.
 * NB! Lahenduses tuleb kasutada AINULT ÜKS foreach
 * tsükli abil, samuti EI SAA kasutada
 * grupeerimisfunktisoone ega muuta antud massiivi
 * */

