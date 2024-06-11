<?php

require_once("dbconnect.php");
        
        $titel = $_POST['titel'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        
        $sql=  "INSERT INTO MovieNight (Filmtitel, Datum, Tid)
               VALUES ('$titel', '$date', '$time');";
        if ($conn->query($sql)==TRUE){
            echo "Ny rad tillagd!";
        } 

$conn->close();

 ?>