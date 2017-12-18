<?php

// Kindlaks määratud arv ning leiab mitu korda see esineb arvus.
// 111222333 - 2 esineb 3 korda.
// Funktsioon peab väljastama tulemuse koos seletava tekstiga.

function otsiNumber($suvalineArv, $kindelArv){
    echo $kindelArv. ' esineb numberis '.$suvalineArv;
    $mituKorda = 0;
    while($suvalineArv != 0){
      $arv = $suvalineArv % 10;
      if ($arv == $kindelArv){
          $mituKorda++;
      }
      $suvalineArv = $suvalineArv / 10;
      settype($suvalineArv, 'integer');
  }
  echo ' '.$mituKorda.' arv korda<br />';
}
otsiNumber(442158775745, 5);
otsiNumber(442158775745, 7);
otsiNumber(442158775745, 1);
otsiNumber(442158775745, 3);

?>