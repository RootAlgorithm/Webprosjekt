<?php
/**
 * Created by PhpStorm.
 * User: Talimere
 * Date: 04/05/17
 * Time: 13.38
 */

require '../vendor/autoload.php';
require '../config.php';

$user = new User();
$user->setAttribute('username', $_POST['']);
$user->setAttribute('first-name', $_POST['']);
$user->setAttribute('last-name', $_POST['']);
$user->setAttribute('email', $_POST['']);

if($_POST[''] == $_POST[''])
{
    $user->setAttribute('password', password_hash($_POST[''], PASSWORD_BCRYPT));
}
$user->save();

header('Location: http://tek.westerdals.no/~ritand16/Webprosjekt');
die();