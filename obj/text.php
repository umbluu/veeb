<?php
/**
 * Created by PhpStorm.
 * User: andre.pukk
 * Date: 15.01.2018
 * Time: 8:51
 */

class text
{
        // klassi omadus(ed)
        // klassi muutuja(d)
        var $string = '';

    /**
     * text constructor.
     * @param string $string
     */
    public function __construct($s)
    {
        $this->assignText($s);
    }
    // klassi tegevused
        // klassi meetodid
        // klassi constructor




        // teksti määramine
        function assignText($s){
            $this->string = $s;
        }
}