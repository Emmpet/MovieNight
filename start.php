<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Filmkväll</title>
        <link href="Style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Hej och välkommen till MovieNight!</h1>
        <p>Här nedan kan du se våra kommande, planerade filmkvällar:</p>


        <?php
   
        require_once("dbconnect.php");

        $sql = "SELECT * FROM MovieNight WHERE Datum >= CURDATE()";

        $result = $conn->query($sql);

        echo "<table  border=\"1\" align=\"center\"  width=\"50%\"><tr ><td colspan=\"3\">MovieNight</td></tr>";
        echo "<tr><td>Filmtitel</td><td>Datum</td><td>Tid</td></tr>";

        while($row = $result->fetch_array()) {
    
            echo "<tr><td>".$row["Filmtitel"]."</td><td>".$row["Datum"]."</td><td>".$row["Tid"]."</td></tr>";
   
        }
  
        echo "</table>";


        $conn->close();

        ?>
        
        <a href="login.php">Logga in</a>
    </body>
</html>