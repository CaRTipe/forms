<?php
include "server.php";
if (isset($_POST['assign_house'])) {


    if (isset($_POST['houses']) && $_POST['tenants']) {
        if(assignHouses($_POST['houses'], $_POST['tenants'])) {
            echo "Data Updated";
        }
        else {
            echo "Not Updated";
        }
    }

} elseif (isset($_POST['create_house'])) {
    if (isset($_POST['houseno'])) {
        if(createHouses($_POST['houseno'])) {
            echo "Data Updated";
        }
        else {
            echo "Not updated";
        }
    }

} else {
    echo "<p>No Actions selected.</p>";
}
?>