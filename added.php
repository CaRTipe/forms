<?php
if (isset($_POST['assign_house'])) {


    echo "<p>House No: ";
    if (isset($_POST['houses'])) {
        echo htmlspecialchars($_POST['houses']);
    }
    echo "</p>";

    echo "<p> Tenant Name: ";
    if (isset($_POST['tenants'])) {
        echo htmlspecialchars($_POST['tenants']);
    }
    echo "</p>";
}
elseif (isset($_POST['create_house'])) {
    echo "<p>House No: ";
    if (isset($_POST['houseno'])) {
        echo htmlspecialchars($_POST['houseno']);
    }
    echo "</p>";

    echo "<p> Tenant Name: ";
    if (isset($_POST['tenantname'])) {
        echo htmlspecialchars($_POST['tenantname']);
    }
    echo "</p>";
}
else {
    echo "<p>No Actions selected.</p>";
}

?>