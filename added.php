<html>
    <body>

        <h1>House No: <?php
         if (isset($_POST['houseno'])) {
            echo htmlspecialchars($_POST['houseno']);
         } else {
            echo "House number not provided.";
         }
        ;  
        ?><br></h1>
        <h1>Name: <?php
            if (isset($_POST['tenantname'])) {
                echo htmlspecialchars($_POST['tenantname']);
            } else {
                echo "Name not provided.";
            }
        ?> </h1>
    </body>
</html>