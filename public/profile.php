<?php
session_start();
if ($_SESSION['login']){
    echo "You are $_SESSION[login]";
} else {
    echo "No one is registered";
}
