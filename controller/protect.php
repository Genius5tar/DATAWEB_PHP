<?php
session_start();
    //Si la variable sesión está vacía
    if (!isset($_SESSION['username'])) 
    {
    // nos envía a la siguiente dirección en el caso de no poseer autorización //
    header("location: ./view/login.php"); 
    }


?>