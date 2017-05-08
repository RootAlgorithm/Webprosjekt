<?php
/**
 * Created by PhpStorm.
 * User: Talimere
 * Date: 04/05/17
 * Time: 13.49
 */

require '../vendor/autoload.php';
require '../config.php';

$users = User::all();
foreach ($users as $user)
{
    if($user->getAttribute('username') == $_POST[''])
    {
        if(password_verify($user->getAttribute('password'), $_POST['']))
        {
            echo 'Login succeeded';
        }
    }
}