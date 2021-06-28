<?php

require 'dbConnect.php';


$name = $_POST['name'];
$seat_no = $_POST['seat_no'];
$date = strval($_POST['date']);
$destination = $_POST['destination'];

$query = "SELECT * FROM tickets where seat_no=".$seat_no." AND  date='".$date."'";

$result = mysqli_query($con,$query);


if(mysqli_num_rows($result)==0)
{

    #insertion
    $query = "INSERT INTO tickets(name,seat_no,date,destination) VALUES ('".$name."',".$seat_no.",'".$date."','".$destination."')";

    $result = mysqli_query($con,$query);

    if($result)
    {
        echo "<script>alert('New ticket registered successfully !')</script>";
    }
    else
    {
        echo "<script>alert('Database insertion failed! Please try again')</script>";
    }

}

else
{
    echo "<script>alert('ticket has been taken')</script>";
}


echo "<a href='index.php'>Go Back to Lising Page</a>";

?>