<?php
function hashPassword(string $string) {
    return md5($string . 'd5f8');
}
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['login'] = $_POST['login'];
    $password = hashPassword($_POST['password']);


    echo "Hello $_SESSION[login], your password hash is $password";
}
?>

<p>Sooooo strange site..</p>

<form action="" method="post">
    <input type="text" name="login">
    <input type="password" name="password">
    <input type="submit" value="Submit">
</form>
<a href="profile.php">Profile</a>
