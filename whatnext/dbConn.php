<?php

$db = mysqli_connect("localhost","root","","whatnext");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>