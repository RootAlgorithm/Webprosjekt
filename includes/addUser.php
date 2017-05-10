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
$user->setAttribute('username', $_POST['brukernavn']);
$user->setAttribute('first-name', $_POST['fornavn']);
$user->setAttribute('last-name', $_POST['etternavn']);
$user->setAttribute('email', $_POST['epost']);

if($_POST['passord'] == $_POST['gjentapassord'])
{
    $user->setAttribute('password', password_hash($_POST['passord'], PASSWORD_BCRYPT));
    $user->save();
    header('Location: http://tek.westerdals.no/~ritand16/Webprosjekt');
}
else
{
    echo 'Du må taste samme passord i begge felt';
}

die();