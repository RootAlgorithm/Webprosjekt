<?php
/**
 * Created by PhpStorm.
 * User: Talimere
 * Date: 01/05/17
 * Time: 18.37
 */

require "vendor/autoload.php";
require "config.php";

$users = User::all();

?>

<?php
require "includes/header.php";
?>

<?php
foreach ($users as $user) {
    ?>

    <p><?php echo $user->getAttribute('username') ?></p>
    <p><?php echo $user->getAttribute('first-name') ?></p>
    <p><?php echo $user->getAttribute('last-name') ?></p>

    <?php
}
?>

<?php
require "includes/footer.php";
?>

