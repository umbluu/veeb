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

    function addRow($row) {
        if(count($row) != $this->columnCount){
            return false;
        }
        array_push($this->tableContent, $row);
        return true;
    }

    function printTable(){
        echo '<pre>';
        foreach ($this->headings as $heading){
            echo '<b>'.$heading.'</b>'.' ';
        }
        echo "\n";
        foreach ($this->tableContent as $row){
            foreach ($row as $rowElement){
                echo $rowElement.' ';
            }
            echo "\n";
        }
        echo '</pre>';
    }
}