<?php 

require 'dbConnect.php';

$query = "SELECT * FROM tickets";


$result = mysqli_query($con,$query);

echo "<h2 align='center' style='color:#008888;'>Ticket List</h2>";
echo "<table border='1' align='center' style='background:#ACF9B8;color:#008888;'>";
echo "<tr><th>Ticket No</th><th>Name</th><th>Seat No</th><th>Date</th><th>Destination</th></tr>";
echo "<form action='insert.php' method='post'>";
echo "<tr>";
echo "<td><input type='submit' value='Insert' style='width:100%;'></td>";
echo "<td><input type='text' name='name'></td>";
echo "<td><input type='number' name='seat_no'></td>";
echo "<td><input type='date' name='date'></td>";
echo "<td><input type='text' name='destination'></td>";
echo "</tr>"; 
echo "</form>"; 

if(mysqli_num_rows($result)>0)
{

    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["ticket_id"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["seat_no"]."</td>";
        echo "<td>".$row["date"]."</td>";
        echo "<td>".$row["destination"]."</td>";
        echo "</tr>";
    }

    echo "</table>";
}

?>