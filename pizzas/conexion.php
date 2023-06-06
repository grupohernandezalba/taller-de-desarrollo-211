<?php

    $usuario    = "adminpizzaslasalle";
    $contrasena = "N1#TBY&cN8DI";
    try{
        $conn = new PDO('mysql:host=localhost;dbname=pizzaslasalle', $usuario, $contrasena);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
            {
                echo "ERROR: " . $e->getMessage();
            }
?>