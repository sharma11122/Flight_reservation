
<?php
require './includes/common.php';

    foreach($_POST['checkboxName'] as $value){
        $_SESSION["seat_no"]=$value;
    }
    echo "<script>window.location='customer.php' ; </script>";

?>