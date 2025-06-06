<?php
include "server.php";
if (isset($_POST['assign_house'])) {


    if (isset($_POST['houses']) && $_POST['tenants']) {
        if (assignHouses($_POST['houses'], $_POST['tenants'])) {
            echo "Data Updated";
        } else {
            echo "Not Updated";
        }
    }
} elseif (isset($_POST["add_tenants"])) {
    if (isset($_POST['fname']) && $_POST['lname'] && $_POST['email'] && $_POST['phone'] && $_POST['date'] && $_POST['password']) {
        addTenants($_POST['fname'], $_POST['lname'], $_POST['email'], $_POST['phone'], $_POST['date'], $_POST['password']);
    }
} elseif (isset($_POST['create_house'])) {
    if (isset($_POST['houseno'])) {
        if (createHouses($_POST['houseno'])) {
            echo "Data Updated";
        } else {
            echo "Not Updated";
        }
    }
} elseif (isset($_POST['check_tenants'])) {
    // echo 'Tets';
    checkTenants($_POST['email'], $_POST['password']);
} else {
    echo "<p>No Actions selected.</p>";
}
