<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Filmkväll</title>
        <link href="Style.css" rel="stylesheet">
    </head>
    
    <body>
        
        <?php
        
   
        require_once("dbconnect.php");

        $sql = "SELECT * FROM MovieNight";

        $result = $conn->query($sql);

        echo "<table  border=\"1\" align=\"center\"  width=\"50%\"><tr ><td colspan=\"3\">MovieNight</td></tr>";
        echo "<tr><td>Filmtitel</td><td>Datum</td><td>Tid</td></tr>";

        while($row = $result->fetch_array()) {
    
            echo "<tr><td>".$row["Filmtitel"]."</td><td>".$row["Datum"]."</td><td>".$row["Tid"]."</td></tr>";
   
        }
  
        echo "</table>";
        


        $conn->close();

        ?>
   
        <br>
        <form action="addActivities.php" method="post">
            <input type="text" name="titel" value="Lägg till filmtitel"><br>
            <input type="date" name="date" value="Lägg till datum"><br>
            <input type="text" name="time" value="Lägg till tid"><br>
            <button type="submit" name="submit">Lägg till</button>
        
        </form>
        
        <br>
        <form action="deleteActivities.php" method="post">
            <input type="text" name="titel" value="Ta bort filmtitel"><br>
            <input type="date" name="date" value="Ta bort datum"><br>
            <input type="text" name="time" value="Ta bort tid"><br>
            <button type="submit" name="submit">Ta bort</button>
        
        </form>
        
    </body>
</html>