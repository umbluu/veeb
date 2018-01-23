<?php
/**
 * Created by PhpStorm.
 * User: andre.pukk
 * Date: 23.01.2018
 * Time: 11:21
 */
// loome menüü peamalli objekti template klassist
$menuTmpl = new template('menu.menu');
// loome menüü elemendi malli objekti
$menuItemTmpl = new template('menu.menu_item');
// tegutseme ühe menüü elemendiga
$menuItemTmpl->set('menu_item_name', 'esimene');
echo '<pre>';
print_r($menuItemTmpl);
echo '</pre>';