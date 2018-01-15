<?php
/**
 * Created by PhpStorm.
 * User: andre.pukk
 * Date: 15.01.2018
 * Time: 12:23
 */

class table
{
    // Klassi muutujad
    var $tableContent = array();
    var $headings = array();
    var $columnCount;

    // Klassi meetodid
    /**
     * table constructor.
     * @param array $headings
     */
    public function __construct(array $headings)
    {
        $this->headings = $headings;
        $this->columnCount = count($headings);
    }

}