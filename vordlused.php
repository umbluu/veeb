<?php
/**
 * Created by PhpStorm.
 * User: andre.pukk
 * Date: 11.12.2017
 * Time: 10:18
 */
///* Loo fail nimega vordlused.php
/// Defineeri vähemalt 6 muutujat
/// kontrolli mis tüüpi väärtused on ja väljasta info ekraanile
/// Kasutates võrdlusoperaatoreid, kontrolli, kas esimene muutuja rahuldab
/// järgmised tingimused:
/// on võrdne teisega
/// on vaiksem kui teine
/// on suurem kui teine
/// on väiksem või võrdne
/// Väljasta tulemused ekraanile
///
/// muutujate defineerimine:

    $var1 = 5;
    $var2 = 5.0;
    $var3 = 2;
    $var4 = 2.0;
    $var5 = "5";
    $var6 = "2";
    $var7 = true;
    $var8 = false;

    // tüübi kontroll gettype(muutuja)

echo '$var1 = '.$var1.' - '.gettype($var1).'<br />';
echo '$var2 = '.$var2.' - '.gettype($var2).'<br />';
echo '$var3 = '.$var3.' - '.gettype($var3).'<br />';
echo '$var4 = '.$var4.' - '.gettype($var4).'<br />';
echo '$var5 = '.$var5.' - '.gettype($var5).'<br />';
echo '$var6 = '.$var6.' - '.gettype($var6).'<br />';
echo '$var7 = '.$var7.' - '.gettype($var7).'<br />';
echo '$var8 = '.$var8.' - '.gettype($var8).'<br />';
// Loome abifunktsiooni lisateksti väljastamiseks
function vordlus($toevaartus) {
    if($toevaartus == true) {
        return ' - true';
    } else {
        return ' - false';
    }
}
// väljastame erinevate võrdluste tulemused
echo $var1.' == '.$var2.vordlus($var1 == $var2).'<br/>';
echo $var1.' == '.$var5.vordlus($var1 == $var5).'<br/>';
echo $var1.' === '.$var2.vordlus($var1 === $var2).'<br/>';
echo $var1.' === '.$var5.vordlus($var1 === $var5).'<br/>';
echo $var5.' === '.$var5.vordlus($var5 === $var5).'<br/>';
echo '<hr />';
echo $var1.' != '.$var3.vordlus($var1 != $var3).'<br/>';
echo $var1.' !== '.$var5.vordlus($var1 !== $var5).'<br/>';
echo '<hr />';
echo $var7.' == '.$var8.vordlus($var7 == $var8).'<br/>';
echo $var7.' != '.$var8.vordlus($var7 != $var8).'<br/>';
echo '<hr />';
//mõned matemaatilised operaatorid
//var++ var-- ++var --var
echo '<hr />';
$a = 2; $b = 5;
$c = $a++;
echo 'a = '.$a.' c = '.$c.'<br />';
$d = $b--;
echo 'a = '.$a.' c = '.$c.'<br />';
$d = $b--;
// loome ühe konstanti
// define() funktsioon
define('AINE_NIMETUS', 'PHP ALUSED');
define('NUMBER', 1);
echo '<hr />';
// trükime need välja
echo 'Aine nimetus: '.AINE_NIMETUS.'<br />';
echo 'Kontantne number: '.NUMBER.'<br />';
// Katsetame konstandi suurendamist
// NUMBER++; // see ei tööta
// echo 'Suurendatud number = '.NUMBER;