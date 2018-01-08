<?php
/**
 * Created by PhpStorm.
 * User: andre.pukk
 * Date: 8.01.2018
 * Time: 10:38
 */
echo '
    <form action="'.$_SERVER['PHP_SELF'].'" method="post">
       Username: <input type="text" name="user"><br />
       Password: <input type="password" name="password"><br />
       <input type="submit" value="Send">
    </form>
';

echo $_SERVER['PHP_SELF'];

echo '<hr />';
if (count($_POST) > 0) {
    $emptyField = 0;
    foreach ($_POST as $element){
        if(strlen($element) == 0){
            echo 'Fields cannot be empty<br />';
            exit;
        }
    }

echo '<pre>';
print_r($_GET);
print_r($_POST);
print_r($_REQUEST);
echo '</pre>';

echo '<hr />';

echo $_POST['user'].'<br />';
echo $_POST['password'].'<br />';
}