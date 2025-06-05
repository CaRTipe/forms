<?php
session_start();



if (isset($_SESSION['loggedin'])) {
    if ($_SESSION['loggedin'] == true) {
        echo "User Logged in";
    } else {
        echo "Log in!";
    }
}
