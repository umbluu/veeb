<?php
/**
 * Created by PhpStorm.
 * User: andre.pukk
 * Date: 23.01.2018
 * Time: 10:30
 */

class tekst
{
    // klassi omadus(ed)
    // klassi muutuja(d)
    var $sone = '';
    // klassi tegevused
    // klassi meetodid
    // klassi konstruktor
    /**
     * tekst constructor.
     */
    public function __construct($s = '')
    {
        $this->maaraTekst($s);
    }
    // teksti määramine
    function maaraTekst($s){
        $this->sone = $s;
    }
    // teksti väljastamine
    function prindiTekst(){
        echo $this->sone.'<br />';
    }
}