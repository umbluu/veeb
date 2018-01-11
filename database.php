<?php
/**
 * Created by PhpStorm.
 * User: andre.pukk
 * Date: 10.01.2018
 * Time: 13:29
 */

error_reporting(E_ALL);

$connection = mysqli_connect("localhost", "xxx", "xxx", "xxxx");

/**echo "<pre>";
print_r($connection);
echo "</pre>";*/

if(!$connection){
    echo "Connection problem!<br />";
    echo mysqli_connect_error($connection)."<br />";
    echo mysqli_connect_errno($connection)."<br />";
} else {
    echo "Connection established<br />";
    $sql = 'INSERT INTO kasutajad(eesnimi, perenimi, synnikuupaev) '.
    'VALUES(\'John\', \'Doe\', \'1992-04-04\')';
    $tulemus = mysqli_query($connection, $sql);
    if(!$tulemus){
        echo 'Problem with SQL query <br />';
        echo mysqli_error($connection).'<br />';
        echo mysqli_errno($connection).'<br />';
    } else {
        echo 'Data is saved!<br />';
        $sql = 'SELECT * FROM kasutajad';
        $tulemus = mysqli_query($connection, $sql);
        if(!$tulemus){
            echo 'Problem with SQL query <br />';
            echo mysqli_error($connection).'<br />';
            echo mysqli_errno($connection).'<br />';
        } else {
            echo '<table border="1">';
            while($rida = mysqli_fetch_row($tulemus)){
                echo '<tr>';
                foreach ($rida as $element) {
                    echo '<td>'.$element.'</td>';
                }
                echo '</tr>';
            }
            echo '</table>';
        }
    }
}