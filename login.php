<!DOCTYPE html>
<?php session_start(); ?>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Filmkväll</title>
        <link href="Style.css" rel="stylesheet">
    </head>
    
    <body>
        
        <?php
        if(isset($_POST['psw']) && $_POST['psw'] == ''){
            $_SESSION['loggedin'] = true;
            header("Location: activities.php");
            exit;
        }
        
        ?>
        
        
        
        
        <form action="login.php" method="post">
            
            <label for="psw">Lösenord:</label>
            <input type="text" id="psw" name="psw"><br>
            <input type="submit" name="submit" value="Logga in">
        
        
        </form>
    
    
    </body>
    
</html>    
    