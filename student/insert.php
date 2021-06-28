<?php

require 'dbConnect.php';

$name = $_POST['name'];
$maths = $_POST['maths'];
$computer = $_POST['computer'];
$english = $_POST['english'];
$science = $_POST['science'];

$query = "INSERT INTO student(name,maths,computer,english,science) VALUES ('".$name."',".$maths.",".$computer.",".$english.",".$science.")";

$result = mysqli_query($con,$query);

if($result)
{
    echo "<script>alert('New student data successfully added !')</script>";
}
else
{
    echo "<script>alert('Database insertion failed! Please try again')</script>";
}

echo "<a href='index.php'>Go Back to Lising Page</a>";

?>