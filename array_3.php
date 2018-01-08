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

foreach ($students as $student){
    arsort($student);
    foreach ($student as $key => $value){
        echo $key.' - '.$value.'<br />';
    }
    echo '-------------------'.'<br />';
}

echo '<hr />';

foreach ($students as $student){
    asort($student);
    foreach ($student as $key => $value){
        echo $key.' - '.$value.'<br />';
    }
    echo '-------------------'.'<br />';
}

echo '<hr />';

/*
 * Defineeri raamatud kirjeldav massiiv kujul:
 * array(
 *      array(
 *          'title' => 'raamat',
 *          'author' => 'autor',
 *          'print' => 'trükikoda',
 *          'status' => 'seisund'
 *      )
 * );
 * Loo funktsioon, mille parameetrina on raamatute
 * massiiv ja seisund, funktsioon tagastab massiivi,
 * kus on raamatud vastava seisundiga (seisund tähendab,
 * kas raamat on välja antud või mitte).
 * Loo funktsioon, mis võtab parameetrina massiivi, ja
 * väljastab tulemused tabeli kujul. Tabeli pealkirjaks
 * on massiivi võtmed
 * */
$raamatud = array(
    array(
        'title' => 'Peppa Goes To London',
        'author' => 'Ladybird',
        'print' => 'Penguin',
        'status' => 'valjas'
    ),
    array(
        'title' => 'Toto, Joonas ja püha Mimoos',
        'author' => 'Kristiina K.',
        'print' => 'Heli Kirjastus OÜ',
        'status' => 'sees'
    ),
    array(
        'title' => 'Lugusid loomadest',
        'author' => 'Ernest Thompson Seton',
        'print' => 'Ernest Thompson Seton',
        'status' => 'sees'
    ),
    array(
        'title' => 'Miljon miksi ja miljon vastust',
        'author' => '',
        'print' => 'TEA Kirjastus',
        'status' => 'sees'
    ),
    array(
        'title' => 'Teadmiste Puu: Maailma Loodus',
        'author' => 'AJ Wood, Mike Jolley',
        'print' => 'Pikoprint',
        'status' => 'valjas'
    )
);
function otsi($raamatud, $seisund){
    $leitud = array();
    foreach ($raamatud as $raamat){
        foreach ($raamat as $kirjeldus => $vaartus){
            if($kirjeldus == 'status' and $vaartus == $seisund){
                $leitud[] = $raamat;
            }
        }
    }
    return $leitud;
}
echo '<pre>';
print_r(otsi($raamatud, 'valjas'));
echo '</pre>';
function pealkiri($raamat){
    $pealkiri = array_keys($raamat);
    echo '<tr>';
    foreach ($pealkiri as $element){
        echo '<th>'.$element.'</th>';
    }
    echo '</tr>';
}
function valjasta($raamatud){
    $pealkiriValjas = 0;
    echo '<table border="1">';
    foreach($raamatud as $raamat){
        echo '<tr>';
        if($pealkiriValjas == 0){
            pealkiri($raamat);
            $pealkiriValjas = 1;
        }
        foreach ($raamat as $info) {
            echo '<td>' . $info . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
valjasta($raamatud);
echo '<hr />';
valjasta(otsi($raamatud, 'valjas'));
echo '<hr />';