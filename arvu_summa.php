<?php
// Koostada funktsioon nimega arvuSumma, mis võtab parameetrina
// arvude summat - juhul kui on argumendina funktsioonile antud number 123, siis programm
// peab leidma 1+2+3 summa, ehk kuus.
// Lahendamiseks ei tohi kasutada sõnetöötluse võimalusi.
// Funktsioon peab tagastama leitud summa põhiprogrammile.
// Põhiprogrammis kasutada väljatrükis tagastatud väärtuse koos selgitava tekstiga.

// Kõik muudatused commitida.

function arvuSumma($number){
    $summa = 0;
    while($number != 0){
        $arv = $number % 10;
        $summa = $summa + $arv;
        $number = $number / 10;
        settype($number, 'integer');
    }
    return $summa;
}
for ($kord = 1; $kord <= 5; $kord++){
    $number = rand(0, 1000);
    echo 'Numbri '.$number.' arvude summa on '.arvuSumma($number).'<br />';
}
?>