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

$uName = $_POST['brukernavn'];
$uPass = $_POST['passord'];


foreach ($users as $user) {
    if($user->getAttribute('username') == $uName) {
        if (password_verify($uPass, $user['password'])) {
            //header("Location: http://vg.no");
            echo "You are a GOD!";
        } else {
            //header("Location: http://google.com");
            echo "NOOOOOOB!!!";
        }
    }
}

?>
