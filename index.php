<?php 

require 'dbConnect.php';

$query = "SELECT * FROM student";

if(!empty($_POST['search']))
{
    $search = $_POST['search'];
    $query = "SELECT * FROM student where rollno=".$search."";
}

$result = mysqli_query($con,$query);

if(mysqli_num_rows($result)>0)
{
    echo "<h2 align='center' style='color:#008888;'>Students Marklist</h2>";
    echo "<table border='1' align='center' style='background:#ACF9B8;color:#008888;'>";
    echo "<tr><th>Roll No.</th><th>Name</th><th>Maths</th><th>English</th><th>Computer</th><th>Science</th></tr>";
    echo "<form action='insert.php' method='post'>";
    echo "<tr>";
    echo "<td><input type='submit' value='Insert' style='width:100%;'></td>";
    echo "<td><input type='text' name='name'></td>";
    echo "<td><input type='text' name='maths'></td>";
    echo "<td><input type='text' name='computer'></td>";
    echo "<td><input type='text' name='english'></td>";
    echo "<td><input type='text' name='science'></td>";
    echo "</tr>"; 
    echo "</form>"; 

    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["rollno"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["maths"]."</td>";
        echo "<td>".$row["computer"]."</td>";
        echo "<td>".$row["english"]."</td>";
        echo "<td>".$row["science"]."</td>";
        echo "</tr>";
    }

    echo "<form action='#' method='post'>";
    echo "<tr>"; 
    echo "<td colspan='4'>Search using Roll Number here :</td>";
    echo "<td><input type='text' name='search'></td>";
    echo "<td><input type='submit' value='Search' style='width:100%;'></td>";
    echo "</tr>";
    echo "</form>"; 

    echo "</table>";
}

?>