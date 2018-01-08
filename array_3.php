<?php
/**
 * Created by PhpStorm.
 * User: andre.pukk
 * Date: 8.01.2018
 * Time: 8:49
 */
$student = array(
    'first_name' => 'John',
    'last_name' => 'Doe',
    'age' => 16,
    'class' => 10
);
echo '<pre>';
print_r($student);
echo '</pre>';

echo '<hr />';

foreach ($student as $key => $value){
    echo $key.' - '.$value.'<br />';
}

echo '<hr />';

$students = array(
    array(
        'first_name' => 'John',
        'last_name' => 'Doe',
        'age' => 16,
        'class' => 10
    ),
    array(
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'age' => 15,
        'class' => 9
    ),
    array(
        'first_name' => 'Tim',
        'last_name' => 'Toe',
        'age' => 14,
        'class' => 8
    )
);

echo '<pre>';
print_r($students);
echo '</pre>';

echo '<hr />';

foreach ($students as $student){
    foreach ($student as $key => $value){
        echo $key.' - '.$value.'<br />';
    }
    echo '-------------------'.'<br />';
}

echo '<hr />';