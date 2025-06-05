<?php
session_start();

$_SESSION['loggedin'] = true;

if (isset($_SESSION['loggedin'])) {
    if ($_SESSION['loggedin'] == true) {
        echo "User Logged in";
    } else {
        echo "Log in!";
    }
}
