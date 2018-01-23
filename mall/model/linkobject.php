<?php
/**
 * Created by PhpStorm.
 * User: andre.pukk
 * Date: 23.01.2018
 * Time: 13:04
 */

class linkobject extends http
{
    var $baseLink = false; // põhilink
    var $protocol = 'http://';
    var $eq = '=';
    var $delim = '&amp;';
    /**
     * linkobject constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->baseLink = $this->protocol.HTTP_HOST.SCRIPT_NAME;
        echo $this->baseLink;
    }
    // loome paarid kujul nimi=väärtus
    // ühendame need ka kokku nimi1=väärtus1&nimi2=väärtus2
    function addToLink(&$link, $name, $value){
        if($link != ''){
            $link = $link.$this->delim;
        }
        $link = $link.fixUrl($name).$this->eq.fixUrl($value);
        echo $link.'<br />';
    }
}