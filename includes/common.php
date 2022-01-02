<?php
    $conn = mysqli_connect("localhost", "root", "", "reservation");
    
    if(!isset($_SESSION)){
        session_start();
    }
?>