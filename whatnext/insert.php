<?php
include "dbConn.php"; // Using database connection file here

if(isset($_POST['submit']))
{		
    $name = $_POST['name'];
    $email = $_POST['email']; 
    $gpa = $_POST['gpa'];
    $grescore = $_POST['grescore'];
    $gatescore = $_POST['gatescore']; 
    $catscore = $_POST['catscore']; 
    $interests = $_POST['interests'];
    $hobbies  = $_POST['hobbies'];

    $insert = mysqli_query($db," INSERT INTO `student` VALUES (0,'$name','$email','$gpa','$grescore','$gatescore','$catscore','$interests','$hobbies') ");

    if(!$insert)
    {
        echo mysqli_error();
    }
    else
    {
       
        header("Location: view.php");
    }
}

mysqli_close($db); // Close connection
?>