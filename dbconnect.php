<?php

// Create connection
$conn = new mysqli("","", "", "");

// Check connection
if (mysqli_connect_errno())
{
printf("DB error: %s", mysqli_connect_error());
exit();
}
?>