<?php

require_once("dbconnect.php");
        
        $titel = $_POST['titel'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        
        $dq=  "DELETE FROM MovieNight WHERE Filmtitel='$titel' AND Datum='$date' AND Tid='$time'";
        if ($conn->query($dq)==TRUE){
            echo "Rad borttagen";
        } 

$conn->close();

 ?>