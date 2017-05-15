<?php
session_start();
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
            $_SESSION["user"] = $uName;
            header("Location: http://tek.westerdals.no/~ritand16");
        }
    }
}
echo "Login failed";

?>
